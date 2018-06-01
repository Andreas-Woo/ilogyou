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

/* Website for home*/

Route::get('/home_aboutUs', function(){
    return view('home.aboutUs');
});

Route::get('/home_moveOverseas', function(){
    return view('home.moveOverseas');
});

Route::get('/home_deliveryPrivate', function(){
    return view('home.deliveryPrivate');
});

Route::get('/home_contractBusiness', function(){
    return view('home.contractBusiness');
});

Route::get('/home_contactUs', function(){
    return view('home.contactUs');
});


Route::resource('delivery', 'DeliveryController');

Route::get('businessUser', 'BusinessUserController@index');
Route::post('businessUser', 'BusinessUserController@login');

//Business User

Route::group(['middleware' => 'businessUser_guest'], function (){

    Route::get('businessUser_register', 'BusinessUserAuth\RegisterController@showRegistrationForm');
    Route::post('businessUser_register', 'BusinessUserAuth\RegisterController@register');
    Route::get('businessUser_login', 'BusinessUserAuth\LoginController@showLoginForm');
    Route::post('businessUser_login', 'BusinessUserAuth\LoginController@login');

//Password reset routes
    Route::get('businessUser_password/reset', 'BusinessUserAuth\ForgotPasswordController@showLinkRequestForm');
    Route::post('businessUser_password/email', 'BusinessUserAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('businessUser_password/reset/{token}', 'BusinessUserAuth\ResetPasswordController@showResetForm');
    Route::post('businessUser_password/reset', 'BusinessUserAuth\ResetPasswordController@reset');

});

Route::group(['middleware' => 'businessUser_auth'], function (){

    Route::post('businessUser_logout', 'BusinessUserAuth\LoginController@logout');
    Route::get('/businessUser_home', function(){
        return view('BusinessUser.home');
    });
});


//deliveryOrder
//Route::get ('deliveryOrder','DeliveryOrderController@index');
//Route::post ('businessUser/deliveryOrder','DeliveryOrderController@store');
Route::get ('businessUser/deliveryOrder/list','DeliveryOrderController@list');
Route::get ('/businessUser/deliveryOrder/list2','DeliveryOrderController@list2');

Route::resource('businessUser/deliveryOrder','DeliveryOrderController');

//Route::post('/deliveryOrder','DeliveryOrderController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('deliveryOrder.create/{store}', 'DeliveryOrderController@store');


//Route::post('deliveryOrder', 'DeliveryOrderController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('import-export-view', 'HomeController@index')->name('import.export.view');
Route::get('import-export-view', 'Excelcontroller@importExportView')->name('import.export.view');
Route::post('import-file', 'ExcelController@importFile')->name('import.file');
Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');


Route::get('datagrid', 'Excelcontroller@viewDatagrid');