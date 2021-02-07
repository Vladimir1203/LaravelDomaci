<?php


use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/trainer', 'TrainerController@index');

Route::resource('user/plan','UsersController');

Route::resource('users','UsersManagementController');

Route::resource('/blog','BlogController');

Route::resource('/message','MessageController');

Route::resource('/editTrainer','TrainerEditController@edit');

Route::post('submit','PostBlogPost@save');

Route::post('/submitMessage','PostMessageController@save');

Route::resource('/deleteMessage', 'MessageController@destroy');

Route::post('/admin/submitTrainerMessage','PostMessageController@saveTrainer');

Route::get('/admin/login','Auth\TrainerLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login','Auth\TrainerLoginController@login')->name('admin.login.submit');

Route::get('/admin','AdminController@index')->name('admin.dashboard');

Route::get('/admin/messaging','AdminController@view');

// REST API
Route::get('posts', 'BlogApiController@index');
Route::get('posts/{id}', 'BlogApiController@show');
Route::post('posts', 'BlogApiController@store');
Route::put('posts/{id}', 'BlogApiController@update');
Route::delete('posts/{id}', 'BlogApiController@delete');
Route::delete('posts', 'BlogApiController@deleteAll');
