<?php

use Illuminate\Support\Facades\Route;

Route::get('courses/','App\Http\Controllers\CourseController@index');
Route::get('courses/show/{id}','App\Http\Controllers\CourseController@show')->name('courses.show');

Route::get('/admin/courses/create','App\Http\Controllers\CourseController@create')->name('admin.courses.create');
Route::post('/admin/courses/create','App\Http\Controllers\CourseController@store')->name('courses.store');