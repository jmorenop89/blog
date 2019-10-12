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

#Route::get('/','HomeController@index')->name('index');
#Route::get('/page/about','HomeController@about')->name('about');
#Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/',['as'=>'index','uses'=>'HomeController@index']);
Route::get('/page/about',['as'=>'about','uses'=>'HomeController@about']);
Route::get('/contact',['as'=>'contact','uses'=>'HomeController@contact']);

// crear un grupo de rutas
Route::group(['prefix'=>'category'],function(){
    Route::get('/',['as'=>'category.index','uses'=>'CategoryController@index']);
    Route::get('create',['as'=>'category.create','uses'=>'CategoryController@create']);
    Route::post('create',['as'=>'category.store','uses'=>'CategoryController@store']);
    Route::get('edit/{id}',['as'=>'category.edit','uses'=>'CategoryController@edit']);
    Route::post('edit/{id}',['as'=>'category.update','uses'=>'CategoryController@update']);
    Route::get('delete/{id}',['as'=>'category.delete','uses'=>'CategoryController@delete']);
});

Route::group(['prefix'=>'post'],function(){
    Route::get('/',['as'=>'post.index','uses'=>'PostController@index']);
    Route::get('create',['as'=>'post.create','uses'=>'PostController@create']);
    Route::post('create',['as'=>'post.store','uses'=>'PostController@store']);
    Route::get('edit/{id}',['as'=>'post.edit','uses'=>'PostController@edit']);
    Route::post('edit/{id}',['as'=>'post.update','uses'=>'PostController@update']);
    Route::get('delete/{id}',['as'=>'post.delete','uses'=>'PostController@delete']);
});

# pasando variable por ruta 
#Route::get('/cliente/{id?}', function ($id=null) {
#    return "Ingreso el cliente de id : $id";
#});

#Route::get('/cliente/{id}/registro/{id_registro}', function ($id,$id_registro) {
#    return "Ingreso el cliente de id : $id y de id registro : $id_registro";
#});