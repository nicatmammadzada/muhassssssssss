<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image;
use App\Models\About;
use App\Models\Pandemia;
use File;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {


        $about = About::first();
        return view('back.about', compact('about'));
    }

    public function store(Request $request)
    {
        $about = About::first();
        $oldPhoto = $about->photo;


        $about->setTranslation('text', app()->getLocale(), $request->text);
        $about->save();

        if (request()->hasFile('photo')) {
            $photo = request()->file('photo');
            $photoFile = time() . '.' . $photo->extension();
            $path = '/uploads/photo/';
            request()->file('photo')->move(public_path($path), $photoFile);
            $image = new Image();
            $image->removeImage($path . $oldPhoto);
            $about->photo = $photoFile;
            $about->save();
        }

        return redirect()
            ->route('admin.about')
            ->with('type', 'success')
            ->with('mesaj', 'Dəyişikliklər yerinə yetirildi');
    }



}
