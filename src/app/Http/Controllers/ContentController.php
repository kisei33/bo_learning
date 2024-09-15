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
}
