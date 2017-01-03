<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::get('users','UserController@users');

// Route::get('siswa',function(){

// 	$users = \App\User::get();
// 	return Response::Json($users);
// });

Route::get('siswa','SiswaController@index');
Route::get('siswa/{nis}','SiswaController@byNis');
Route::post('tambah','SiswaController@tambah');
Route::put('ubah/{id}','SiswaController@ubah');
Route::delete('hapus/{id}','SiswaController@hapus');

