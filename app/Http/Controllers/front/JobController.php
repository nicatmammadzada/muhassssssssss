<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index()
    {
        return view('front.jobs.job-list');
    }
    public function create()
    {
        return view('front.jobs.job-create');
    }
}
