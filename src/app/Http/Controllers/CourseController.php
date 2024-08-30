<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('courses.create');    
    }

    public function show($id)
    {
        $course = Course::find($id);

        return view('courses.show', ['course' => $course]);
    }   
}
