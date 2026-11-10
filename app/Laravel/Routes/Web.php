<?php

use Illuminate\Support\Facades\Route;
$namespace = "App\Laravel\Controllers\Web";

Route::group(['as' => "web.",
    'namespace' => $namespace,
    'middleware' => ["web"]
],function() {
    Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);
});
