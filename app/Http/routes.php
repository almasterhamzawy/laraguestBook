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

Route::controller('admin/users','Admin\adminUsersController');
Route::controller('admin/messages','Admin\adminMessagesController');
Route::controller('admin/products','Admin\adminProductsController');
Route::get('admin','Admin\adminUsersController@getAdmin');
Route::controller('messages','messagesController');
Route::controller('products','productsController');
Route::controller('users','usersController');
Route::controller('/','homeController');