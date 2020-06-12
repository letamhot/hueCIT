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
Auth::routes();

Route::get('/index', 'PostsController@index')->name('index');
Route::get('/create', 'PostsController@create')->name('create');
Route::get('/edit', 'PostsController@edit')->name('edit');
Route::get('/layouts', 'PostsController@layouts')->name('layouts');
Route::get('/show', 'PostsController@show')->name('show');

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
Route::get('/login', array('uses' => 'Auth\LoginController@showLogin'));

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
Route::resource('/Nhansu', 'NhansuController');
Route::get('/Nhansu', 'NhansuController@index')->name('nhansu.index');
Route::get('/Nhansu/details/{id}', 'NhansuController@details')->name('nhansu.details');
Route::get('/Nhansu/add', 'NhansuController@add')->name('nhansu.add');
Route::post('/Nhansu/insert', 'NhansuController@insert')->name('nhansu.insert');
Route::get('/Nhansu/edit/{id}', 'NhansuController@edit')->name('nhansu.edit');
Route::post('/Nhansu/update/{id}', 'NhansuController@update')->name('nhansu.update');
Route::get('/Nhansu/delete/{id}', 'NhansuController@delete')->name('nhansu.delete');
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('bn', function () {
    return view('layouts.BNAD');
});

Route::get('/benhnhan', 'BenhnhanController@index')->name('benhnhan.index');
Route::get('/benhnhan/details/{id}', 'BenhnhanController@details')->name('benhnhan.details');
Route::get('/benhnhan/add', 'BenhnhanController@add')->name('benhnhan.add');
Route::post('/benhnhan/insert', 'BenhnhanController@insert')->name('benhnhan.insert');
Route::get('/benhnhan/edit/{id}', 'BenhnhanController@edit')->name('benhnhan.edit');
Route::post('/benhnhan/update/{id}', 'BenhnhanController@update')->name('benhnhan.update');
Route::get('/benhnhan/delete/{id}', 'BenhnhanController@delete')->name('benhnhan.delete');

Route::get('csyt', function () {
    return view('layouts.CSYT');
});

Route::get('/cosoyte', 'CosoyteController@index')->name('cosoyte.index');
Route::get('/cosoyte/details/{id}', 'CosoyteController@details')->name('cosoyte.details');
Route::get('/cosoyte/add', 'CosoyteController@add')->name('cosoyte.add');
Route::post('/cosoyte/insert', 'CosoyteController@insert')->name('cosoyte.insert');
Route::get('/cosoyte/edit/{id}', 'CosoyteController@edit')->name('cosoyte.edit');
Route::post('/cosoyte/update/{id}', 'CosoyteController@update')->name('cosoyte.update');
Route::get('/cosoyte/delete/{id}', 'CosoyteController@delete')->name('cosoyte.delete');