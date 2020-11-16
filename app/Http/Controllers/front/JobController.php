<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\ApplyMail;
use App\Models\Type;
use App\Models\Vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class JobController extends Controller
{
    //
    public function index()
    {
        $items = Vacancies::with('type')->where('is_active', 1)->orderBy('id', 'desc')->paginate(3);
        $types = Type::all();
        return view('front.jobs.job-list', compact('items', 'types'));
    }

    public function create()
    {
        $items = Vacancies::orderBy('id', 'desc')->get();
        return view('front.jobs.job-create', compact('items'));
    }

    public function store(Request $request)
    {

        $this->validate(request(), [

            'email' => 'required|email',
            'role' => 'required'

            // 'photo' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:500',
        ]);

        $rand1 = rand(0, 999999);
        $rand2 = rand(0, 99999);
        $unique_id = $rand1 . $rand2;
        $slug = Str::slug($request->role, '-');

        $request->request->add([
            'unique_id' => $unique_id,
            'slug' => $slug . $unique_id
        ]);


        Vacancies::create($request->request->all());
        //    if ($request->hasFile('photo')) {

        //     $image = new Image();
        //     $path = '/uploads/image/';
        //     $photoFile = $request->file('photo');
        //     $photo = $image->image($photoFile, '', '', $path);
        //     //  $image->removeImage($last_image_path);
        //     $cv->photo = $photo;
        //     $cv->save();
        //    }
        //    if(!$cv)
        //    dd("yuklenmedi");
        return redirect()->back()->with('mesaj', 'elave edildi 1-24 saat erzinde tesdiqlenecek');
    }


    public function apply(Request $request)
    {


        $this->validate(request(), [
            'email' => 'required|email',
            'name' => 'required',
            "file" => "required"
        ]);

        $job = Vacancies::findOrFail($request->job_id);
        Mail::to('nicatmemmedzade@hotmail.com')->send(new ApplyMail($request));
        dd($request);

        $rand1 = rand(0, 999999);
        $rand2 = rand(0, 99999);
        $unique_id = $rand1 . $rand2;
        $slug = Str::slug($request->role, '-');

        $request->request->add([
            'unique_id' => $unique_id,
            'slug' => $slug . $unique_id
        ]);

        return redirect()->back()->with('mesaj', 'elave edildi 1-24 saat erzinde tesdiqlenecek');
    }

    public function getType()
    {
        $id=\request('id');
        $items = Vacancies::with('type')->where('type_id',$id)->where('is_active', 1)->orderBy('id', 'desc')->paginate(3);

        return view('front.render.get-vacancies',compact('items'))->render();
    }

}
