<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use App\Models\Vacancies;
use App\Models\OrderList;
use File;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index()
    {
        $items = Vacancies::orderby('id', 'desc')->get();


        return view('back.vacancies.index', compact('items'));
    }

    public function show($uId)
    {
        // $orders = Order::orderby('id', 'desc')->with('product','user')->where('unique_id',$uId)->get();
        $orders = OrderList::with('orders.product', 'user')->where('order_unique_id', $uId)->first();
        $orders->is_show = 1;
        $orders->save();
        $orders = $orders->orders;

        return view('back.vacancies.detail', compact('orders'));
    }

    public function create()
    {
        return view('back.vacancies.create');

    }
    public function store(Request $request)
    {
        $this->validate(request(), [
            'empolyer' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'company' => 'required',
            'city' => 'required'
           // 'photo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:500',
        ]);

        return view('back.cv.create');

    }

    public function confirm($id)
    {
        $items = Vacancies::findOrFail($id);
        $items->is_active=1;
        $items->save();
        return redirect()->back()->with('id',$id)->with('mesaj','elan tesdiq edildi');
    }

    public function remove($id)
    {
        $items = Vacancies::findOrFail($id);
        $items->delete();

        return redirect()->back()->with('mesaj','elan silindi');
    }



}
