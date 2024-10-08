<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
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
                'title' => 'Raila入門',
                'introduction' => 'Railsの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],
            [
                'title' => 'Python入門',
                'introduction' => 'Pythonの基礎を学ぶためのコースです。',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
                'comment' => '初めての方におすすめ',
                'user_id' => 1,
            ],  
            [
                'title' => 'Java入門',
                'introduction' => 'Javaの基礎を学ぶためのコースです。',
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
        ]);
    }
}
