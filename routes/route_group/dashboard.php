<?php

# Dashboard route group
Route::group(['namespace' => 'Dashboard'], function () {

    # Home Page
    Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
    
    # Documentation Page
    Route::get('/documentation', ['as' => 'documentation', 'uses' => 'IndexController@documentation']);
    
    # Explore Page
    Route::get('/explore', ['as' => 'explore', 'uses' => 'IndexController@explore']);
    
    # Create App Page
    Route::get('/app/create', ['as' => 'app.create', 'uses' => 'IndexController@createApp']);
    
    # Manage App Page
    Route::get('/app/manage/{id}', ['as' => 'app.manage', 'uses' => 'IndexController@manageApp']);
    

});