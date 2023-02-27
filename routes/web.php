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

use App\Http\Controllers\Web\RouteController as WebRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db', function () {
    return view('mahasiswa');
});


Route::group(['prefix'=>'laravel'], function() {
    Route::get('/',[WebRoute::class, 'index']);
    Route::get('/{satu}',[WebRoute::class, 'IndexRouteSatu']);
    Route::get('/{satu}/{dua}',[WebRoute::class, 'IndexRouteDua']);
    Route::get('/{satu}/{dua}/{tiga}',[WebRoute::class, 'IndexRouteTiga']);

    Route::post('/',[WebRoute::class, 'index']);
    Route::post('/{satu}',[WebRoute::class, 'IndexRouteSatu']);
    Route::post('/{satu}/{dua}',[WebRoute::class, 'IndexRouteDua']);
    Route::post('/{satu}/{dua}/{tiga}',[WebRoute::class, 'IndexRouteTiga']);

});
