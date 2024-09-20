<?php

use Illuminate\Support\Facades\Route;

Route::get('courses/','App\Http\Controllers\CourseController@index');
Route::get('courses/show/{id}','App\Http\Controllers\CourseController@show')->name('courses.show');

Route::get('/admin/courses/create','App\Http\Controllers\CourseController@create')->name('admin.courses.create');
Route::post('/admin/courses/create','App\Http\Controllers\CourseController@store')->name('courses.store');

Route::get('contents/show/{id}','App\Http\Controllers\ContentController@show')->name('contents.show');

Route::get('/admin/contents/create','App\Http\Controllers\ContentController@create')->name('admin.contents.create');
Route::post('/admin/contents/create','App\Http\Controllers\ContentController@store')->name('contents.store');