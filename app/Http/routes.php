
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/zatiketa', function () {
    return view('zatiketa');
});
Route::get('/kalitatea', function () {
    return view('kalitatea');
});
Route::get('/kalitateajefe', function () {
    return view('kalitateajefe');
});
Route::post('/mekanizatua', function () {
    return view('mekanizatua');
});
Route::post('/mekanizatuajefe', function () {
    return view('mekanizatuajefe');
});
Route::get('/almazena', function () {
    return view('almazena');
});
Route::get('/almazenajefe', function () {
    return view('almazenajefe');
});
Route::get('/bidalketak', function () {
    return view('bidalketak');
});
Route::get('/bidalketakjefe', function () {
    return view('bidalketakjefe');
});
Route::get('/loteak', function () {
    return view('loteak');
});
Route::get('/wellcome', function () {
    return view('wellcome');
});



require __DIR__.'/admin_routes.php';

Route::get('/loteak','HomeController@loteak'); 
Route::get('/langileZerrenda','HomeController@bistaratu'); 
Route::get('/langileBerria','HomeController@berria');
Route::get('/zat_get','HomeController@zat_bistaratu');
Route::post('/zat_berria','HomeController@zat_berria');
Route::get('/mek_get','HomeController@mek_bistaratu');
Route::get('/mek_getjefe','HomeController@mek_bistaratujefe');
Route::post('/mek_berria','HomeController@mek_berria');
Route::get('/alm_bidali','HomeController@almazena_b');
Route::get('/alm_bidalijefe','HomeController@almazena_bjefe');
Route::get('/kokapena','HomeController@kalitatea_bistaratu');
Route::get('/kokapenajefe','HomeController@kalitatea_bistaratujefe');
Route::get('/almazen','HomeController@kokapena');
Route::get('/almazenjefe','HomeController@kokapenajefe');
Route::post('/bid_berria','HomeController@bid_berria');
Route::post('/kalitate_berria','HomeController@kalitate_berria');
Route::post('/almazen_berria','HomeController@almazen_berria');
Route::post('/langile_sortu','HomeController@langile_sortu');
