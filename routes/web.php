<?php

use Yuga\Route\Route;

Route::get('/', new App\ViewModels\Welcome('Welcome to Yuga Framework'));


Route::get('/test', 'TestController@test');