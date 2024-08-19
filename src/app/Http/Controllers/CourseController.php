<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $courses = [
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Laravel入門',
                'introduction' => 'Laravelの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],           
        ];

        return view('courses.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('courses.create');    
    }
}
