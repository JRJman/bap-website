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

Route::get('/', 'HomeController@showPage')->name('homepage');

Route::get('/contact', function () {
    return 'Contact';
})->name('contact');

Route::get('/dit/is/een/lange-url/zeg','PageController@longUrl')->name('lange-url');

Route::redirect('/korte-url','/dit/is/een/lange-url/zeg')->name('korte-url');

Route::get('/blog/artikel/{artikel}','BlogController@showArtikel')->name('blog');

Route::prefix('mijn-account')->group(function(){
    Route::get('instellingen', 'MijnAccountInstellingenController@showPage')->name('mijn-account-instellingen');
    Route::get('bestellingen', 'MijnAccountBestellingenController@showPage')->name('mijn-account-bestellingen');
});

Route::prefix('views')->group(function(){
   Route::get('view1','ViewController@showPage1')->name('view1');
   Route::get('view2','ViewController@showPage2')->name('view2');
   Route::get('view3','ViewController@showPage3')->name('view3');
});

