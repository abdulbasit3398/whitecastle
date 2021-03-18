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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', 'HomeController@index')->name('dashboard');
// Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/pricing', 'HomeController@pricing')->name('pricing');
// Route::get('/contact', 'HomeController@contact')->name('contact');
// Route::get('/my-account', 'HomeController@my_account')->name('my-account');
// Route::post('/send_contact', 'HomeController@send_contact')->name('send_contact');


//Admin Routes
Route::group(['prefix' => 'admin','middleware' => ['admin.access','auth'],'namespace' => 'Admin'], function(){
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::resource('/categories', 'CategoryController');
});



// Route::post('/payment', 'PaymentController@paymentProcess')->name('payment');

Route::get('/logout', function(){
    Artisan::call('cache:clear');
    return App::call('\App\Http\Controllers\Auth\LoginController@logout');
});