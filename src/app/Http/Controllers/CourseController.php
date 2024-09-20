<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Content;
use Illuminate\Http\Request;

class CourseController extends Controller
{
     /**
	 * 学習コース一覧を表示
	 */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('courses.create');    
    }

     /**
	 * 選択したコースとコンテンツ一覧を表示
	 * @param int $course_id コースID
	 */
    public function show($id)
    {
        $course = Course::find($id);
        $contents = Content::where('course_id', $id)->get();

        return view('courses.show', ['course' => $course, 'contents' => $contents]);
    }

     /**
	 * コースを新規作成
	 */
    public function store(Request $request)
    {
      // 新しい course を作成
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
