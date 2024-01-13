<?php
use App\Mail\SampleMail;
use App\Http\Controllers\SendMailController ;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('sendmail', [SendMailController::class, 'index'])->name('sendmail');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
//Route::get('404', function () {
   // return view('404');
//});
//Route::get('portofolio-details', function () {
  //  return view('portofolio-details');
//});
Route::get('contact', function () {
  return view('contact');
});
//Route::get('blog-single', function () {
   // return view('blog-single');
//});
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
