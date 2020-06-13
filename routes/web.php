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
    return view('layouts.master');
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
Route::post('/insert', 'NhansuController@insert')->name('nhansu.insert');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('bn', function () {
    return view('layouts.BNAD');
});
Route::resource('/benhnhan', 'BenhnhanController');

Route::get('/index', 'BenhnhanController@index')->name('benhnhan.index');
Route::get('/details/{id}', 'BenhnhanController@details')->name('benhnhan.details');
Route::get('/add', 'BenhnhanController@add')->name('benhnhan.add');
Route::post('/insert', 'BenhnhanController@insert')->name('benhnhan.insert');
Route::get('/edit/{id}', 'BenhnhanController@edit')->name('benhnhan.edit');
Route::post('/update/{id}', 'BenhnhanController@update')->name('benhnhan.update');
Route::get('/delete/{id}', 'BenhnhanController@delete')->name('benhnhan.delete');

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