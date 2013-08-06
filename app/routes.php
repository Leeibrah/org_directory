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

Route::resource('organisations', 'OrganisationsController');

Route::resource('/', 'HomeController');

// Route::resource('dogs', 'DogsController');
// Route::resource('matches', 'MatchesController');
// Route::resource('topmessages', 'matches.topmessages');
