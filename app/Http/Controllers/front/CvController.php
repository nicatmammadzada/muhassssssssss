<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Image;
use App\Models\CV;
use File;
class CvController extends Controller
{

    public function index()
    {   $items= CV::orderBy('id','desc')->get();
        return view('front.cv.index',compact('items'));
    }
    public function create()
    {
        return view('front.cv.create');
    }
    public function store(Request $request)
    {

        $this->validate(request(), [

            'email' => 'required|email',
            'role' => 'required |max:4|min:2',
            'photo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:500'
        ]);

       $cv=CV::create($request->request->all());
       if ($request->hasFile('photo')) {
        $image = new Image();
        $path = '/uploads/image/';
        $photoFile = $request->file('photo');
        $photo = $image->image($photoFile, '', '', $path);
        //  $image->removeImage($last_image_path);
        $cv->photo = $photo;
        $cv->save();
       }

       if(!$cv)
       dd("yuklenmedi");
       return redirect()->back()->with('mesaj','elave edildi');
    }



}
