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
Route::group(
    array(
        'prefix' => LaravelLocalization::setLocale(),
        'before' => 'LaravelLocalizationRedirectFilter' // LaravelLocalization filter
    ),
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

      
       Route::get('/','TravelController@index');
    });


