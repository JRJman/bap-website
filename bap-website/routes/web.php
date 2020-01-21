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

/*
    DIT ZIJN MIJN TEST PAGINAS DIE IK HEB GEMAAKT MET DE FILMPJES

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
*/

// DIT ZIJN DE PAGINAS DIE IK MAAK VOOR DE WEBSITE ALS EINDPRODUCT

Route::get('/', 'WebsiteHomeController@showPage')->name('homepage');
Route::get('/over-ons', 'WebsiteOverOnsController@showPage')->name('over-ons');
Route::get('/login', 'WebsiteLoginController@showPage')->name('login');
Route::get('/registeer', 'WebsiteRegisteerController@showPage')->name('registeer');
Route::get('/winkelwagen', 'WebsiteWinkelwagenController@showPage')->name('winkelwagen');

Route::get('/artikel/{artikelnummer}','WebsiteArtikelController@showArtikel')->name('artikel');
Route::get('/account/{accountId}', 'WebsiteSearchController@showPage')->name('account');



