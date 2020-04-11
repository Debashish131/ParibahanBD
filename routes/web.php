<?php

use Illuminate\Support\Facades\Route;

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
Route::get('qrcode/{username}', function ($username) 
{
     return QrCode::size(300)->generate($username);

 });

Route::get('/qr','QrcodeController@qrcode');
Route::get('/', function ()
 {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('generate-pdf','PDFController@generatePDF')->middleware("verified");

Route::resource('/complains','ComplainController')->middleware("verified");
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
Route::get('/about', 'AboutController@index');
Route::get('/registrations' ,'RegistrationController@index');
Route::post('/submit' ,'RegistrationController@submitform');

Route::get('/adminview','AdminController@index')->middleware('is_admin');;
Route::get('/delete/{id}','AdminController@deleteinfo')->middleware('is_admin');
Route::get('/delete/{id}','AdminController@deletereg')->middleware('is_admin');
Route::get('/adminregview','AdminController@regadmin')->middleware('is_admin');


Route::get('/customers/pdf','CustomerController@export_pdf');
Route::get('/logout', 'HomeController@logout');
Route::get('/renewal', 'HomeController@renewal');

Route::get('/test',function()
{
  $registrations=DB::table('registrations')->get();
  return $registrations;
}
);
