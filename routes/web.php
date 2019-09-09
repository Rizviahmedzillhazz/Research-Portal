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
    return view('master');
});

route::resource ('/info','InfoController');
route::resource ('/research','ResearchTopic_Controller');
route::resource ('/group','GroupController');
route::resource ('/notice','NoticeController');

