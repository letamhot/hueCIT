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
Auth::routes();

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('home', function () {
    return view('layouts.home');
});

Route::get('app', function () {
    return view('layouts.app');
});

Route::get('404', function () {
    return view('admin.404');
 });
Route::get('blank', function () {
    return view('admin.blank');
 });

Route::resource('post','PostsController');
Route::group(['msql_tablename()' => 'users'], function () {
Route::get('/register','Auth\RegisterController@getRegister');
Route::get('/forgot', 'Auth\ForgotPasswordController@getForgotPassword');


Route::post('/add', 'Auth\RegisterController@add');

Route::post('/register','Auth\RegisterController@postRegister');

});


Route::get('users', function () {
    return view('layouts.users');
});

// route to show the login form
Route::get('/login', array('uses' => 'Auth\LoginController@showLogin'))
;

Route::post('signin', 'Auth\LoginController@doLogin');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('dashboard', 'DashboardController@index'); 
Route::get('yte', 'DashboardController@index1');


Route::get('/highchart/nhansu', 'ChartDataController@getNhanSu');
Route::get('/highchart/cosoyte', 'ChartDataController@getCoSoYTe');
Route::get('/highchart/benhnhan', 'ChartDataController@getBenhnhan');


// use App\nhansu;
// use Illuminate\Http\Request;
Route::get('ns', function () {
    return view('layouts.NSAD');
});
Route::resource('/nhansu', 'NhansuController');


Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('bn', function () {
    return view('layouts.BNAD');
});
Route::resource('/benhnhan', 'BenhnhanController');

Route::get('csyt', function () {
    return view('layouts.CSYT');
});
Route::resource('/cosoyte', 'CosoyteController');