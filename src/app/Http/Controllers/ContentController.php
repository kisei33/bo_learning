<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
	/**
	 * 選択したコースとコンテンツ一覧を表示
	 * @param int $content_id コンテンツID
	 */
	public function show($id)
    {
        $content = Content::find($id);

        return view('contents.show', ['content' => $content]);
    }

	public function create()
    {
        return view('contents.create');    
    }

	 /**
	 * コンテンツを新規作成
	 */
    public function store(Request $request)
    {
      // 新しい course を作成
      $content = new Content;
      // フォームから送られてきたデータをそれぞれ代入
	  $content->user_id = $request->user_id;
      $content->course_id = $request->course_id;
      $content->title = $request->title;
      $content->body = $request->body;
      // データベースに保存
      $content->save();
      // indexページへ遷移
      return redirect('/courses');
    }
}
