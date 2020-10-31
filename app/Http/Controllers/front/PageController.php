<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function contact()
    {
        return view('front.contact');
    }
    public function blog()
    {
        return view('front.blog.index');
    }
    public function blogDetail()
    {
        return view('front.blog.detail');
    }


}
