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

Route::get('/', 'HomeController@index')->name('listing');

// Questa Route racchiude tutte le sette route dei metodi del CRUD, ovvero le richieste GET, POST, PUT, DESTROY.
    /*  GET|HEAD    | /
        GET|HEAD    | pics
        POST        | pics
        GET|HEAD    | pics/create
        GET|HEAD    | pics/{pic}
        PUT|PATCH   | pics/{pic}
        DELETE      | pics/{pic}
    */
// Devo solo mettere il nome dell'indirizzo di base (pics) e il nome del controller
Route::resource('/pics', 'PicController');
// Route::get('/p', 'PicController@index')->name('pics.index');
// Route::get('/listings/create', 'PicController@create')->name('listing');
// Route::get('/listings/create', 'PicController@create')->name('listing');
// Route::get('/', 'PicController@index')->name('listing');


// Route::get('/', 'PicController@show')->name('show');

