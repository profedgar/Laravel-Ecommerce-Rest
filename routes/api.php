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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('produto', 'Produtoscontroller@index');
Route::get('produto/{id}', 'Produtoscontroller@show');
Route::post('produto', 'Produtoscontroller@store');
Route::put('produto/{id}', 'Produtoscontroller@update');
Route::delete('produto/{id}', 'Produtoscontroller@delete');

*/

Route::get('/', function () {
    //return view('welcome');
    return "Primeira páginaaaa";
});


Route::post('/teste', function (Request $request) {
    //return view('welcome');
    return $request;
});
/*
Route::get('produto', 'Produtoscontroller@index');
Route::get('produto/{id}', 'Produtoscontroller@show');
Route::post('produto', 'Produtoscontroller@store');
Route::put('produto/{id}', 'Produtoscontroller@update');
Route::delete('produto/{id}', 'Produtoscontroller@delete');


Route::resource('photos', 'PhotoController')->only([
    'index', 'show'
]);

Route::resource('photos', 'PhotoController')->except([
    'create', 'store', 'update', 'destroy'
]);
*/

Route::resource('produtos', 'Produtoscontroller');