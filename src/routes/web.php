<?php

use Illuminate\Support\Facades\Route;

Route::get('courses/','App\Http\Controllers\CourseController@index');

Route::get('/admin/courses/create','App\Http\Controllers\CourseController@create');