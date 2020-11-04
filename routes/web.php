<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Front
use Illuminate\Support\Facades\Artisan;

//Route::redirect('/', '/az');
//'where' => ['locale' => '[a-zA-Z]{2}']
//'prefix' => '{locale}',
Route::group(['namespace' => 'front'], function () {
    Route::get('/langg/{lang}', 'HomeController@lang')->name('set.lang');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/index2', 'HomeController@index2')->name('home2');
    Route::get('/haqqimizda', 'HomeController@about')->name('about');
    Route::post('/ok', 'BasketController@ok')->name('ok');

    Route::get('/istifade-qaydalari', 'HomeController@terms')->name('terms');
    Route::get('/faq', 'HomeController@faq')->name('faq');

    Route::get('/test', 'HomeController@test')->name('test');
    Route::get('/vacancies-list', 'CVController@index')->name('vacancies-list');
    Route::get('/cv-create', 'CVController@create')->name('cv-create');
    Route::post('/cv-store', 'CVController@store')->name('cv.store');
    Route::get('/job-list', 'JobController@index')->name('job-list');
    Route::get('/job-create', 'JobController@create')->name('job-create');
    Route::post('/job-store', 'JobController@store')->name('job.store');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/blogDetail', 'PageController@blogDetail')->name('blog.detail');
    Route::get('/blog', 'PageController@blog')->name('blog.index');





    Route::get('/search', 'HomeController@search')->name('search');
    Route::post('/request', 'HomeController@request')->name('request');

    Route::get('/vacancy', 'HomeController@vacancies')->name('vacancies');
    Route::get('/about', 'HomeController@about')->name('about');

    Route::get('/delivery', 'HomeController@delivery')->name('delivery');
    Route::get('/qaytarilma', 'HomeController@qaytarilma')->name('qaytarilma');
    Route::get('/menyu', 'HomeController@menu')->name('menu');


    Route::group(['prefix' => 'account'], function () {
        Route::get('/cv', 'AccountController@cv')->name('cv');
        Route::get('/', 'AccountController@index')->name('account');
        Route::post('/edit', 'AccountController@edit')->name('account_edit');

    });

    Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
        Route::get('/{slug}', 'ProductController@index')->name('index');

    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('/login', 'AuthController@login_form')->name('login');
        Route::get('/register-form', 'AuthController@register_form')->name('register');
        Route::post('/login', 'AuthController@login')->name('login');
        Route::post('/register', 'AuthController@register')->name('registerP');
        Route::get('/activation/{activation}', 'AuthController@activation')->name('activation');
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });


    Route::group(['prefix' => 'basket', 'as' => 'basket.'], function () {
        Route::get('/', 'BasketController@index')->name('index');
        Route::post('/add', 'BasketController@add')->name('add');
        Route::post('/update', 'BasketController@update')->name('update');
        Route::post('/buy', 'BasketController@buy')->name('buy');
        Route::post('/promo', 'BasketController@promo')->name('promo');
        Route::post('/show-product', 'BasketController@showProduct')->name('showProduct');
        Route::post('/location', 'BasketController@location')->name('location');
        Route::post('/currentLocation', 'BasketController@currentLocation')->name('currentLocation');
        Route::get('/destroy/{id}', 'BasketController@destroy')->name('destroy');

    });

    Route::group(['prefix' => 'vacancies', 'as' => 'vacancies.'], function () {
        Route::get('/', 'VakancyController@index')->name('index');
        Route::get('/edit/{id}', 'VakancyController@edit')->name('edit');
        Route::get('/show/{uid}', 'VakancyController@show')->name('show');
        Route::post('/create', 'VakancyController@create')->name('create');
        Route::get('/remove/{id}', 'VakancyController@remove')->name('remove');
        Route::post('/store', 'VakancyController@store')->name('store');
        Route::post('/mail', 'VakancyController@mail')->name('mail');
        Route::get('/filter', 'VakancyController@filter')->name('filter');
    });



    Route::post('/email', 'ContactController@email')->name('contact.email');


    Route::post('/subscribe', 'SubscribeController@store')->name('subscribe');


});


//Cache clear
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return redirect()->back();
})->name('clear.cache');


//////////


//Back
Route::group(['prefix' => 'admin', 'namespace' => 'back'], function () {

    Route::redirect('/', '/admin/login');
    Route::get('/login', 'AuthController@index')->name('admin.login');
    Route::post('/login', 'AuthController@login')->name('admin.login');
    Route::get('/logout', 'AuthController@logout')->name('admin.logout');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/', 'HomeController@index')->name('admin');
        /*Dil deyismek*/
        Route::get('/lang/{lang}', 'HomeController@lang')->name('choose.lang');



        /*settings*/


        /*users*/
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@index')->name('admin.user');
            Route::get('/create', 'UserController@create')->name('admin.user.create');
            Route::post('/store', 'UserController@store')->name('admin.user.store');
            Route::get('/edit/{id}', 'UserController@edit')->name('admin.user.edit');
            Route::post('/{id}/update', 'UserController@update')->name('admin.user.update');
            Route::get('/destroy/{id}', 'UserController@destroy')->name('admin.user.destroy');
            // Route::get('/activation/{activation}', 'UserController@activation')->name('activation');
        });

        /*dil*/
        Route::group(['prefix' => 'dil'], function () {
            Route::get('/', 'DilController@index')->name('dil.list');
            Route::get('/new', 'DilController@new')->name('dil.new');
            Route::post('/add', 'DilController@add')->name('dil.add');
            Route::get('/edit/{id}', 'DilController@edit')->name('dil.edit');
            Route::post('/editor/{id}', 'DilController@editor')->name('dil.editor');
            Route::get('/sil/{id}', 'DilController@sil')->name('dil.sil');
        });

        /*Language lines*/
        Route::group(['prefix' => 'll'], function () {
            Route::get('/', 'LL_Controller@index')->name('ll.list');
            Route::get('/new', 'LL_Controller@new')->name('ll.new');
            Route::post('/add', 'LL_Controller@add')->name('ll.add');
            Route::get('/edit/{id}', 'LL_Controller@edit')->name('ll.edit');
            Route::post('/editor/{id}', 'LL_Controller@editor')->name('ll.editor');
            Route::get('/destroy/{id}', 'LL_Controller@destroy')->name('ll.destroy');
            Route::get('/filter/', 'LL_Controller@filter')->name('ll.filter');
        });


        /*slider*/
        Route::group(['prefix' => 'slider', 'as' => 'admin.'], function () {
            Route::get('/', 'SliderController@index')->name('slider.index');
            Route::post('/add/', 'SliderController@add')->name('slider.add');
            Route::post('/update/{id}', 'SliderController@update')->name('slider.update');
            Route::get('/delete/{id}', 'SliderController@delete')->name('slider.delete');
        });


        // PostController with resource
        Route::group(['prefix' => 'post'], function () {
            Route::get('/', 'PostController@index')->name('admin.post');
            Route::get('/create', 'PostController@create')->name('admin.post.create');
            Route::post('/store', 'PostController@store')->name('admin.post.store');
            Route::get('/destroy/{slug}', 'PostController@destroy')->name('admin.post.destroy');
            Route::get('/edit/{slug}', 'PostController@edit')->name('admin.post.edit');
            Route::post('/{slug}/update', 'PostController@update')->name('admin.post.update');
            Route::post('/choose1', 'PostController@choose1')->name('admin.post.choose1');
            Route::post('/choose2', 'PostController@choose2')->name('admin.post.choose2');
            Route::post('/event', 'PostController@event')->name('admin.post.event');
            Route::post('/analitika1', 'PostController@analitika1')->name('admin.post.analitika1');
            Route::post('/analitika2', 'PostController@analitika2')->name('admin.post.analitika2');
            Route::post('/mobile', 'PostController@mobile')->name('admin.post.mobile');
            Route::post('/sem', 'PostController@sem')->name('admin.post.sem');

        });

        Route::group(['prefix' => 'product', 'as' => 'admin.product.'], function () {
            Route::get('/sushi/{id}', 'ProductController@index')->name('index');
            Route::get('/create', 'ProductController@create')->name('create');
            Route::post('/store', 'ProductController@store')->name('store');
            Route::get('/promo/{id}', 'ProductController@promo')->name('promo');
            Route::post('/promokod/{id}', 'ProductController@promokod')->name('promokod');
            Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
            Route::post('/update/{id}', 'ProductController@update')->name('update');
            Route::get('/destroy/{id}', 'ProductController@destroy')->name('destroy');
            Route::get('/remove/promo/{id}', 'ProductController@promoDestroy')->name('promoDestroy');
            Route::post('/row', 'ProductController@row')->name('row');
        });


        Route::group(['prefix' => 'category', 'as' => 'admin.category.'], function () {
            Route::get('/', 'CategoryController@index')->name('index');
            Route::get('/create', 'CategoryController@create')->name('create');
            Route::post('/store', 'CategoryController@store')->name('store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
            Route::post('/update/{id}', 'CategoryController@update')->name('update');
            Route::get('/destroy/{id}', 'CategoryController@destroy')->name('destroy');
        });


        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', 'ContactController@index')->name('admin.contact');
            Route::get('/destroy/{slug}', 'ContactController@destroy')->name('admin.contact.destroy');
        });

        // SubscribeController with resource
        Route::group(['prefix' => 'subscribe'], function () {
            Route::get('/', 'SubscribeController@index')->name('admin.subscribe');
            Route::get('/destroy/{slug}', 'SubscribeController@destroy')->name('admin.subscribe.destroy');
        });


        // AboutController with resource
        Route::group(['prefix' => 'about'], function () {
            Route::get('/', 'AboutController@edit')->name('admin.about');
            Route::post('/update', 'AboutController@store')->name('admin.about.store');
        });

        // DELIVERYController with resource
        Route::group(['prefix' => 'delivery'], function () {
            Route::get('/', 'DeliveryController@edit')->name('admin.delivery');
            Route::post('/update', 'DeliveryController@store')->name('admin.delivery.store');
        });

        // ConfigController with resource
        Route::group(['prefix' => 'config'], function () {
            Route::get('/', 'ConfigController@index')->name('admin.config');
            Route::post('/{id}/update', 'ConfigController@update')->name('admin.config.update');
        });


        Route::group(['prefix' => 'photos', 'as' => 'admin.photo.'], function () {
            Route::get('/', 'PhotoController@index')->name('index');
            Route::get('/edit/{id}', 'PhotoController@edit')->name('edit');
            Route::post('/create', 'PhotoController@create')->name('create');
            Route::get('/remove/{id}', 'PhotoController@remove')->name('remove');
            Route::post('/store/{id}', 'PhotoController@store')->name('store');
        });

        Route::group(['prefix' => 'cv', 'as' => 'admin.cv.'], function () {
            Route::get('/', 'CvController@index')->name('index');
            Route::get('/edit/{id}', 'CvController@edit')->name('edit');
            Route::post('/update/{id}', 'CvController@update')->name('update');
            Route::get('/show/{uid}', 'CvController@show')->name('show');
            Route::get('/create', 'CvController@create')->name('create');
            Route::post('/store', 'CvController@store')->name('store');
            Route::get('/remove/{id}', 'CvController@remove')->name('remove');

        });
        Route::group(['prefix' => 'vacancies', 'as' => 'admin.vacancies.'], function () {
            Route::get('/', 'VacanciesController@index')->name('index');
            Route::get('/edit/{id}', 'VacanciesController@edit')->name('edit');
            Route::post('/update/{id}', 'VacanciesController@update')->name('update');
            Route::get('/show/{uid}', 'VacanciesController@show')->name('show');
            Route::get('/create', 'VacanciesController@create')->name('create');
            Route::post('/store', 'VacanciesController@store')->name('store');
            Route::get('/confirm/{id}', 'VacanciesController@confirm')->name('confirm');
            Route::get('/remove/{id}', 'VacanciesController@remove')->name('remove');

        });


        Route::group(['prefix' => 'clients', 'as' => 'admin.client.'], function () {
            Route::get('/', 'ClientController@index')->name('index');
            Route::get('/edit/{id}', 'ClientController@edit')->name('edit');
            Route::get('/show/{uid}', 'ClientController@show')->name('show');
            Route::post('/create', 'ClientController@create')->name('create');
            Route::get('/remove/{id}', 'ClientController@remove')->name('remove');
            Route::post('/store/{id}', 'ClientController@store')->name('store');
            Route::post('/mail', 'ClientController@mail')->name('mail');
            Route::get('/filter', 'ClientController@filter')->name('filter');

        });


        // Route::group(['prefix' => 'vacancies', 'as' => 'admin.vacancies.'], function () {
        //     Route::get('/', 'VakancyController@index')->name('index');
        //     Route::get('/edit/{id}', 'VakancyController@edit')->name('edit');
        //     Route::get('/show/{uid}', 'VakancyController@show')->name('show');
        //     Route::post('/create', 'VakancyController@create')->name('create');
        //     Route::get('/remove/{id}', 'VakancyController@remove')->name('remove');
        //     Route::post('/store/{id}', 'VakancyController@store')->name('store');
        //     Route::post('/mail', 'VakancyController@mail')->name('mail');
        //     Route::get('/filter', 'VakancyController@filter')->name('filter');
        // });



    });

});
