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

    public function store(Request $request)
    {
      // 新しい Item を作成
      $course = new Course;
      // フォームから送られてきたデータをそれぞれ代入
      $course->user_id = $request->user_id;
      $course->title = $request->title;
      $course->introduction = $request->introduction;
      // データベースに保存
      $course->save();
      // indexページへ遷移
      return redirect('/courses');
    }
}
