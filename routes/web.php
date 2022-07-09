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

Route::get('/diaries', 'DiaryController@index')->name('diaries'); //日記の一覧
Route::get('/diary/create', 'DiaryController@create')->name('diary.create'); //日記の作成
Route::post('/diary/store', 'DiaryController@store')->name('diary.store'); //日記の投稿

// Route::get('/posts/{post}/edit', 'PostController@edit'); //投稿編集画面
// Route::put('/posts/{post}', 'PostController@update'); //編集操作
// Route::get('/posts/{post}', 'PostController@show'); //投稿詳細画面
// Route::delete('/posts/{post}', 'PostController@delete'); //投稿削除
// Route::get('/categories/{category}', 'CategoryController@index'); //カテゴリー一覧画面