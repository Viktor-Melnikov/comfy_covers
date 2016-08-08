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
/*Route::group(['middleware' => ['web']], function ()
{*/

Route::get('', 'Main\IndexController@index');
Route::get('catalog/{category}', 'Main\CatalogController@index');
Route::get('about', 'Main\PageController@about');

Route::group(['prefix' => 'admin'], function()
{
    Route::group(['middleware' => 'guest'], function()
    {
        Route::group(['prefix' => 'auth',], function()
        {
            Route::get('login', 'Admin\Auth\AuthController@showLogin');
            Route::post('login', 'Admin\Auth\AuthController@postLogin');
        });
    });

    Route::group(['middleware' => 'auth'], function()
    {
        Route::get('', 'Admin\Dashboard\IndexController@index');
        Route::get('auth/logout', 'Admin\Auth\AuthController@logout');

        Route::group(['prefix' => 'employees'], function()
        {
            Route::get('', 'Admin\Dashboard\EmployeeController@index');
            Route::get('{id}', 'Admin\Dashboard\EmployeeController@view');
        });

        Route::group(['prefix' => 'clients'], function()
        {
            Route::get('', 'Admin\Dashboard\ClientsController@index');
            Route::get('{id}', 'Admin\Dashboard\ClientsController@view')->where(['id' => '([0-9])+']);
            Route::get('add', 'Admin\Dashboard\ClientsController@create');
            Route::post('add', 'Admin\Dashboard\ClientsController@store');
            Route::delete( 'delete/{id}', 'Admin\Dashboard\ClientsController@delete' )->where(['id' => '([0-9])+']);
        });

        Route::group(['prefix' => 'category'], function()
        {
            Route::get('', 'Admin\Dashboard\CategoryController@index');
            Route::get('add', 'Admin\Dashboard\CategoryController@create');
            Route::post('add', 'Admin\Dashboard\CategoryController@store');

            Route::delete( 'delete/{id}', 'Admin\Dashboard\CategoryController@delete' )->where(['id' => '([0-9])+']);
        });

        Route::group(['prefix' => 'product'], function()
        {
            Route::get('', 'Admin\Dashboard\ProductController@index');
            Route::get('add', 'Admin\Dashboard\ProductController@create');
            Route::post('add', 'Admin\Dashboard\ProductController@store');
            Route::get('{id}', 'Admin\Dashboard\ProductController@view')->where(['id' => '([0-9])+']);
            Route::post('{id}', 'Admin\Dashboard\ProductController@edit')->where(['id' => '([0-9])+']);

            Route::delete( 'delete/{id}', 'Admin\Dashboard\ProductController@delete' )->where(['id' => '([0-9])+']);
        });
    });

});
//});