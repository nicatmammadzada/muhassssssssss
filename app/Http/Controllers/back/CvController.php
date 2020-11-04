<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image;
use App\Models\CategoryPost;
use App\Models\CV;
use App\Models\OrderList;
use File;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $items = CV::orderby('id', 'desc')->where('is_active', '1')->get();


        return view('back.cv.index', compact('items'));
    }

    public function show($uId)
    {
        // $orders = Order::orderby('id', 'desc')->with('product','user')->where('unique_id',$uId)->get();
        $orders = OrderList::with('orders.product', 'user')->where('order_unique_id', $uId)->first();
        $orders->is_show = 1;
        $orders->save();
        $orders = $orders->orders;

        return view('back.cv.detail', compact('orders'));
    }

    public function create()
    {
        
        return view('back.cv.create');

    }
    public function store(Request $request)
    {
        
        $this->validate(request(), [
           
            'email' => 'required|email',
            'role' => 'required'
            
           // 'photo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:500',
        ]);
        
           
        return view('back.cv.create');

    }


}
