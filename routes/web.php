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
// Route::group(['prefix' => 'admin', 'middleware' => 'Ip'], function(){
// Route::group(['prefix' => 'admin'], function(){

// 	Route::get('hi', function () {
//     return "hi all";
//     });//http://localhost/tuto-laravel/public/admin/hi

//     Route::get('hi/{name}*{id}', function ($name, $id) {
//     return "hi $name, id $id"; // echo "hi $name, id $id";
//     })->where('name','[A-Za-z0-9\-_ ]+')->where('id','[^a-z]+');
//     //ou ->where(['name' => '[A-Za-z0-9\-_ ]+', 'id' => '[^a-z]+']);
//     //http://localhost/tuto-laravel/public/hi/EL--BARRAK_ Mohamed*1

// });//http://localhost/tuto-laravel/public/admin/hi/EL--BARRAK_ Mohamed*1
//    //ou
//    //http://localhost/tuto-laravel/public/admin/hi

// Route::post('/hh', function () {//on peut entrer a cette page seulement si l'appele et dans une autre page avec bouton par exemple
//     //return view('welcome');
//    //return view('elbarrak');
// });

// Route::get('name/', 'TestController@contact');
// Route::get('name/{name}', 'TestController@contact');
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('Statistique', function () {
    return view('layouts.Statistique');
});

Auth::routes();//les routes de l'identifiction
//Route::get('/accueil', 'HomeController@index')->name('home');//
/*Route::get('/accueil', function () {
    return view('layouts.accueil');
});*/
Route::get('/accueil', function () {
    return view('layouts.accueil');
});
// Route::get('/accueil', 'HomeController@index');
Route::get('/errors/403', function () {
    return view('errors.403');
});
/*Route::get('/Capture2', function () {
    return view('Capture2.PNG');
});*/

Route::get('/deconnexion', 'CompteController@deconnexion');

// Route::get('/home', 'HomeController@index')->name('home');//
// Route::get('/contact', 'ContactController@newContact');
// Route::get('/listcontacts', 'ContactController@listContacts');

Route::get('/users', 'UserController@listUsers');
Route::get('/users/Admins', 'UserController@listAdmins');
Route::get('/users/{id}/edit', 'UserController@edit');//
Route::put('/users/{id}', 'UserController@update');
Route::get('/users/{id}/show', 'UserController@show');
Route::delete('/users/{id}', 'UserController@destroy');

Route::get('/users/{id}/devenAdmin', 'UserController@devenAdmin');
Route::get('/users/{id}/showuser', 'UserController@show');


////
Route::get('/cvs/{id}/onoff1', 'CvController@onoff1');
Route::get('/cvs/{id}/onoff2', 'CvController@onoff2');
Route::get('/cvs/mesannonces', 'CvController@mesannonces');
Route::get('/cvs/annoncesNonTretee', 'CvController@annoncesNonTretee');
/*Route::get('/cvs', 'CvController@index');
Route::get('/cvs/create', 'CvController@create');
Route::post('/cvs', 'CvController@store');
Route::get('/cvs/{id}/edit', 'CvController@edit');
Route::put('/cvs/{id}', 'CvController@update');
Route::delete('/cvs/{id}', 'CvController@destroy');*/
Route::get('/cvs/{id}/show', 'CvController@show');
Route::resource('cvs', 'CvController');