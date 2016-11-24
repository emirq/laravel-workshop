<?php

Auth::loginUsingId(3);

Route::get('/', 'ComponentsController@welcome');

// Form Objects #1
Route::get('/forms', 'ComponentsController@forms');
Route::post('posts', 'FormsController@store');

// Use cases
Route::get('purchases', 'PurchasesController@store');

Route::get('users', 'UsersController@store');

Route::get('value-objects', 'ComponentsController@valueObjects');
Route::get('policies/teams/{id}/members', 'TeamMembersController@store');