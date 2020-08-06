<?php

use Illuminate\Support\Facades\Route;


// User Route
Route::group(['namespace'=>'User'], function(){
Route::get('/', 'HomeController@index');
Route::get('post/{post}', 'PostController@index')->name('post');

Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
Route::get('post/category/{category}', 'HomeController@category')->name('category');
});


// Admin Route
Route::group(['namespace'=>'Admin'], function(){
Route::get('admin/dashboard','HomeController@index')->name('admin.dashboard');

Route::resource('admin/user', 'UserController');
Route::resource('admin/role', 'RoleController');
Route::resource('admin/permission', 'PermissionController');
Route::resource('admin/post', 'PostController');
Route::resource('admin/tag', 'TagController');
Route::resource('admin/category', 'CategoryController');

// Admin Auth Login
Route::get('adminlogin', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('adminlogin', 'Auth\LoginController@login');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
