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
Route::get('/', 'DiaryController@aa');
Route::get('/diaries', 'DiaryController@index')->name('diaries'); //日記の一覧
Route::get('/diary/create', 'DiaryController@create')->name('diary.create'); //日記の作成
Route::post('/diary/store', 'DiaryController@store')->name('diary.store'); //日記の投稿
Route::delete('/diary/delete/{diary}', 'DiaryController@delete')->name('diary.delete'); //日記の削除



//Route::get('/math', 'PostController@math'); //一覧画面

Route::get('/math', function(){
    return view('math/index');
}); 

Route::get('/manegiment', function(){
    return view('diaries/manegiment');
}); 


Route::get('/translator', 'TranslatorController@index')->name('translator');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
