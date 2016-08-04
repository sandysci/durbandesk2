<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses'=>'UserController@index', 'as'=>'ind'));
Route::get('login', array('uses'=>'UserController@login', 'as'=>'login'));
Route::post('login', array('uses'=>'UserController@authenticate', 'as'=>'authenticate'));
Route::get('register', 'UserController@register');
Route::get('error', 'UserController@error');
Route::get('emailregister', 'UserController@emailregister');
Route::get('tipstour', 'UserController@tipstour');
Route::post('register', array('uses'=>'UserController@store','as'=>'storeuser'));
Route::post('storeagent', array('uses'=>'UserController@storeagent','as'=>'storeagent'));
Route::get('logs', 'Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::group(['before' => 'auth'], function(){
    Route::get('dash', array('uses'=>'DashboardController@index', 'as'=>'dashindex'));
    Route::get('profile', array('uses'=>'DashboardController@profile', 'as'=>'profile'));
    Route::get('addagent', array('uses'=>'DashboardController@addagent', 'as'=>'addagent'));
    Route::post('addagent', array('uses'=>'DashboardController@storeagent','as'=>'storeagent'));
    Route::get('viewregisteredticket', array('uses'=>'DashboardController@viewregisteredticket', 'as'=>'viewregisteredticket'));
    Route::get('customer', array('uses'=>'DashboardController@customer', 'as'=>'customer'));
    Route::get('viewagent', array('uses'=>'DashboardController@viewagent', 'as'=>'viewagent'));
    Route::get('viewticket', array('uses'=>'DashboardController@viewticket', 'as'=>'viewticket'));
    Route::get('vieweachticketclick/{id}', array('uses'=>'DashboardController@vieweachticketclick', 'as'=>'vieweachticketclick'));
    Route::get('deleteticket/{id}', array('uses'=>'DashboardController@deleteticket', 'as'=>'deleteticket'));
    Route::get('viewedit/{id}', array('uses'=>'DashboardController@viewedit', 'as'=>'viewedit'));
    Route::post('viewedit/{id}', array('uses'=>'DashboardController@updateticket', 'as'=>'ticket.update'));
    Route::get('admin', array('uses'=>'DashboardController@admin', 'as'=>'admin'));
    Route::get('addticket', array('uses'=>'DashboardController@addticket', 'as'=>'addticket'));
    Route::post('addticket', array('uses'=>'DashboardController@storeticket','as'=>'storeticket'));
    Route::get('logout', 'DashboardController@logout');

});

Route::group(['prefix' => 'password'], function(){
    Route::get('/reset', ['uses' => 'PasswordController@getRemind', 'as' => 'password.remind']);
    Route::post('reset', ['uses' => 'PasswordController@postRemind', 'as' => 'password.request']);
    Route::get('reset/{token}', ['uses' => 'PasswordController@getReset', 'as' => 'password.reset']);
    Route::post('reset/{token}', ['uses' => 'PasswordController@postReset', 'as' => 'password.update']);
});
