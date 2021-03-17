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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin1', function () {
    return view('.admin/index');
});
Route::get('/dashboard', function () {
    return view('.Dashboard/dashboard');
});

// Route::get('/category', function () {
//     return view('.Dashboard/category');
// });
// <!-------------------------------------------- category----------------------------->
Route::group(['prefix' => 'category'], function () {
    Route::get('/','categorycontroller@getcate');
    Route::post('/','categorycontroller@postcate');

    Route::get('edit/{id}','categorycontroller@editcate');
    Route::post('edit/{id}','categorycontroller@posteditcate');


    Route::get('delete/{id}','categorycontroller@getdeletecate');

    });
//<!-------------------------------------------- warehousedigitals----------------------------->
Route::resource('/warehousedigitals','warehousedigitalsController');
//<!-------------------------------------------- licenses----------------------------->
Route::group(['prefix' => 'license'], function () {
    Route::get('/','licensecontroller@getLicense');
    // Route::post('/','licensecontroller@getaddLicense');

    Route::get('addlicenses','licensecontroller@getaddLicense');
    Route::post('addlicenses','licensecontroller@postaddLicense');

    Route::get('edit/{id}','licensecontroller@edit');
    Route::post('edit/{id}','licensecontroller@posteditLicense');


    Route::get('delete/{id}','licensecontroller@getdeletelicenses');

    });
