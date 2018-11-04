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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/login',array('as'=>'login',function(){
    return view('login');
}));
Route::get('/', function () {
    return view('home');
});
Route::get('/unos', function () {
    return view('inputform');
})->middleware('auth');

Route::get('/pretraga', function () {
    return view('search');
});
Route::get('/mapa', 'DisplayDataController@getMapData');

Route::post('/login/submit', 'LoginController@submit');

Route::get('/list', 'DisplayDataController@getListData');

Route::post('/list/search', 'DisplayDataController@getListData');

Route::get('/grafik', 'DisplayDataController@getGraphData');

Route::post('/inputform/submit', 'InputFormController@submit');
