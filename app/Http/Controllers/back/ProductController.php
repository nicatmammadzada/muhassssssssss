<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promocode;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index($id)
    {
        $category = Category::where('id', $id)->with('products')->first();
        // dd($category->products->count()        );
        return view('back.product.index', compact('category'));
    }


    public function create()
    {
        $categorys = Category::all();
        return view('back.product.create', compact('categorys'));
    }


    public function store(Request $request)
    {
       $validate= [
            'price' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:500',
            'slug' => 'required|unique:product',
        ];
      
        $messages = [
            'price.required' => 'price boş ola bilməz!',
            'slug.required' => 'slug boş ola bilməz!',
            'photo.required' => 'Şəkil boş ola bilməz!',
            'photo.mimes' => 'Yüklənə bilən formatlar jpg,jpeg,png,webp',
            'photo.uploaded' => 'Bilinməyən xəta',
            'photo.image' => 'Yüklənə bilən formatlar jpg,jpeg,png,webp',

        ];
        
        
        $this->validate(request(),$validate,$messages);
        
        
        
        
        
        $photo = request()->file('photo');
        $photoFile = time() . '.' . $photo->extension();
        request()->file('photo')->move(public_path('/uploads/product/'), $photoFile);

        $product = new Product();
        $product->price = $request->price;
        $product->discountprice = $request->discountprice;
        $product->photo = $photoFile;
        $product->category_id = $request->category_id;
        $product->kkal = $request->kkal;

        $slug = Str::slug($request->slug, '-');


        $product->setTranslation('name', app()->getLocale(), $request->name);
        $product->setTranslation('slug', app()->getLocale(), $slug);
        $product->setTranslation('description', app()->getLocale(), $request->description);
        $product->setTranslation('ingredient', app()->getLocale(), $request->ingredient);
        $product->save();
        return redirect()
            ->back()
            ->with('type', 'success')
            ->with('id', $product->id)
            ->with('mesaj', 'Product Created');
    }


    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $last_image_path = public_path("/uploads/product/$product->photo"); // Value is not URL but directory file path
        if (File::exists($last_image_path)) {
            File::delete($last_image_path);
        }
        $product->delete();
        return redirect()
            ->back()
            ->with('type', 'success')
            ->with('mesaj', 'Silinmə tamamlandı');
    }


    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        if(!$product)
            abort(404);
        $categorys = Category::all();
        return view('back.product.edit', compact('product', 'categorys'));
    }

    public function promo($id)
    {
        //  $product = Product::withTrashed()->where('id', $id)->with('promo')->first();

        $product = Product::with(['promos' => function ($q) {
            $q->withTrashed();
        }])->find($id);

        return view('back.product.promo', compact('product'));
    }

    public function update(Request $request, $id)
    {

    $validate= [
            'price' => 'required',
           
            'slug' => 'required|unique:product',
        ];
      
        $messages = [
            'price.required' => 'price boş ola bilməz!',
            'slug.required' => 'slug boş ola bilməz!',
            'photo.required' => 'Şəkil boş ola bilməz!',
            'photo.mimes' => 'Yüklənə bilən formatlar jpg,jpeg,png,webp',
            'photo.uploaded' => 'Bilinməyən xəta',
            'photo.image' => 'Yüklənə bilən formatlar jpg,jpeg,png,webp',

        ];
        
        
        $this->validate(request(),$validate,$messages);
        
        
        
        
        
        
        
        
        $product = Product::find($id);
        $slug = Str::slug($request->slug, '-');

        $last_image_path = public_path("/uploads/product/$product->photo"); // Value is not URL but directory file path

        $product->price = $request->price;
        $product->discountprice = $request->discountprice;
        $product->category_id = $request->category_id;
        $product->kkal = $request->kkal;
        $product->setTranslation('name', app()->getLocale(), $request->name);
        $product->setTranslation('slug', app()->getLocale(), $slug);
        $product->setTranslation('description', app()->getLocale(), $request->description);
        $product->setTranslation('ingredient', app()->getLocale(), $request->ingredient);

        if ($request->proposal == 1) {
            $product->proposal = 1;

        } else {
            $product->proposal = 0;
        }


        if ($request->hasFile('photo')) {
            if (File::exists($last_image_path)) {
                File::delete($last_image_path);
            }
            $image = new Image();
            $path = '/uploads/product/';
            $photoFile = $request->file('photo');
            $photo = $image->image($photoFile, '', '', $path);
            //  $image->removeImage($last_image_path);
            $product->photo = $photo;
        }
        $product->save();

        return redirect()
            ->back()
            ->with('type', 'success')
            ->with('mesaj', 'Product updated');

    }

    public function promokod(Request $request, $id)
    {
        $validate = [
            'code' => 'required',
            'start_date' => 'required|date|date_format:Y-m-d|after:yesterday',
            'end_date' => 'required|date|date_format:Y-m-d|after:xxxx',
            'faiz' => 'required',
        ];
        $messages = [
            'code.required' => 'Code boş ola bilməz!',
            'start_date.required' => 'başlama tarixi boş ola bilməz!',
            'end_date.required' => 'bitmə tarixi boş ola bilməz!',
            'start_date.after' => 'baslama tarixi düzgün secilməyib!',
            'end_date.after' => ' bitme tarixi düzgün secilməyib!',

        ];

        Promocode::where('end_date', '<', now())->delete();

        $this->validate(request(), $validate, $messages);
        \request()->request->add(['product_id' => $id]);
        Promocode::create($request->all());

        return redirect()
            ->back()
            ->with('type', 'success')
            ->with('mesaj', 'Product updated');

    }


    public function promoDestroy($id)
    {
        $promo = Promocode::where('id', $id)->first();

        $promo->delete();
        return redirect()
            ->back()
            ->with('type', 'success')
            ->with('mesaj', 'Silinmə tamamlandı');
    }
    
            public function row()
    {

        $id = \request('id');
        $value = \request('value');
        $product = Product::find($id);
        $product->row = $value;
        $product->save();
    }


}
