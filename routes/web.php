<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
//     // Backpack\MenuCRUD
//     CRUD::resource('menu-item', 'MenuItemCrudController');
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

Route::get('/', function () {
     return \Redirect::to('/dashboard');
});
Route::get('/dashboard','CRUD@index');
Route::get('/dashboard/hapus/{id}','CRUD@hapus');
Route::post('/dashboard/tambah',['as'=>'tambahData','uses'=>'CRUD@tambah']);
Route::put('/dashboard/ubah/{id}','CRUD@ubah');
Route::get('dashboard/add','CRUD@add');
Route::get('dashboard/siswa/{id}','CRUD@getUbah');
    });


