<?php
use App\Message;
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

Route::get('/', function () {

	$reasons=\App\Reason::withTranslation(\App::getLocale())->get();
	$aboys=\App\Aboy::withTranslation(\App::getLocale())->get();
	$offers=\App\Offer::withTranslation(\App::getLocale())->get();
	$about=\App\About::withTranslation(\App::getLocale())->first();
	$product=\App\Product::withTranslation(\App::getLocale())->first();
	$images=\App\Image::all();
    return view('welcome', compact('reasons', 'aboys', 'offers', 'product', 'about', 'images'));
});

Route::post('/contact', function(\App\Http\Requests\Message $request){
	$message=new Message();
	$message->name=$request->name;
	$message->phone=$request->phone;
	$message->email=$request->email;
	$message->region=$request->region;
	$message->save();

	session()->flash('msg', 'принято');

	return back();
})->name('contact');

Route::post('/download', function(){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$message=new Message();
	$message->name=$name;
	$message->phone=$phone;
	$message->email=$email;
	$message->save();
	return 'success';

});

Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
