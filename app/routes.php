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

App::before(function($request)
{
    // default browser language
    $language = substr($request->server->get('HTTP_ACCEPT_LANGUAGE'), 0, 2);

    echo $request->server->get('HTTP_ACCEPT_LANGUAGE'); exit;
    // language set from route
    if (null !== $request->segment(1)) {
        $routeLanguage = $request->segment(1);
        if (in_array($routeLanguage, Config::get('app.languages'))) {
            $language = $routeLanguage;
        }
    }
    // set the language
    Config::set('app.locale', $language);
    App::setLocale($language);
});


Route::get('/','TravelController@index');