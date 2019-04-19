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
        return view('home');
    })->name('home');
    //route admin
    Route::get('login', 'UserController@login')->name('user.login');
    Route::post('login', 'UserController@postlogin')->name('user.login');
    Route::get('logout', 'UserController@logout')->name('user.logout');       
    Route::get('/{name}', 'QuestionController@index')->name('user.index');
    Route::post('/{name}', 'QuestionController@getInfor')->name('ques.post');
    Route::get('/{loca}/index', 'ContestController@index')->name('contest.index');
    Route::post('/{loca}/index', 'ContestController@submit')->name('contest.post');
    Route::group(['prefix' => 'quanly', 'middleware' => 'AdminMiddleware'], function()
    {
        Route::get('ques/create', 'QuestionController@create')->name('ques.create');
        Route::post('ques/create', 'QuestionController@store')->name('ques.store');   
        Route::get('ques/index', 'QuestionController@indexValue')->name('ques.indexValue');
        Route::get('result/index', 'ResultController@index')->name('res.index');
        Route::get('loca/index', 'LocationController@index')->name('lo.index');
        Route::get('loca/create', 'LocationController@create')->name('loca.create');
        Route::post('loca/create', 'LocationController@store')->name('loca.store');  
        Route::get('{table}/importExport', 'QuestionController@importExport')->name('file.importExport');
        Route::get('downloadExcel/{table}/{type}', 'QuestionController@downloadExcel')->name('file.download');
        Route::post('{table}/importExcel', 'QuestionController@importExcel');
        Route::post('/res/search', 'ResultController@search')->name('res.search');
        Route::get('/res/{numpage}', 'ResultController@pagination')->name('res.pagination');
        Route::get('/res/orderBy/{orderBy}', 'ResultController@orderBy')->name('res.orderBy');       
        Route::resource('ques','QuestionController');
        Route::resource('res','ResultController');
        Route::resource('loca','LocationController');
        Route::resource('type','TypeController');
    });
    //route nguoi dung   
