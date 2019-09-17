<?php

//User routes
Route::group(['namespace'  => 'User'], function (){

    Route::get('/', 'HomeController@index')->name('main');

    Route::get('post/{post}', 'PostController@post')->name('post');


    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');

    Route::get('post/category/{category}', 'HomeController@category')->name('category');

});



//Admin routes
Route::group(['namespace' => 'Admin'], function (){

    Route::get('admin/home', 'HomeController@home')->name('admin.home');

    //Post Routes

    Route::resource('admin/post', 'PostController');

    //Users Routes

    Route::resource('admin/user', 'UserController');

    //Category Routes

    Route::resource('admin/category', 'CategoryController');

    //Tag Routes

    Route::resource('admin/tag', 'TagController');

    //Roles Routes

    Route::resource('admin/role', 'RoleController');

    //Permission Routes

    Route::resource('admin/permission', 'PermissionController');


    //Admin Auth Routes

    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('admin-login', 'Auth\LoginController@login');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
