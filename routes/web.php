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

Route::group(['middleware' => 'auth'], function ()
{
    //    Route::get('/link1', function ()    {
    //        // Uses Auth Middleware
    //    });

    //TAGS
    Route::get('tags/', 'TagsController@index')->name('tags.index');     // INDEX
    Route::post('tags/store', 'TagsController@store')->name('tags.store');     // INDEX



    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
