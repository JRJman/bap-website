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
})->name('welcome');

Route::get('/contact', function () {
    return 'Contact';
});

Route::get('/dit/is/een/lange-url/zeg','PageController@longUrl');

Route::get('/korte-url','PageController@longUrl');

Route::get('/blog/artikel/{artikel}','BlogController@showArtikel')->where('artikel', '[A-Za-z]+');

Route::prefix('mijn-account')->group(function(){
    Route::get('instellingen', 'MijnAccountInstellingenController@showPage');
    Route::get('bestellingen', 'MijnAccountBestellingenController@showPage');
});

