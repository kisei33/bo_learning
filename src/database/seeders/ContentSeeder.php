<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::insert([
            [
                'course_id' => 1,
                'user_id' => 1,
                'title' => 'First Content',
                'file_name' => 'first_file.pdf',
                'kind' => 'pdf',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
            ],
            [
                'course_id' => 1,
                'user_id' => 1,
                'title' => 'Second Content',
                'file_name' => 'second_file.docx',
                'kind' => 'doc',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 2,
            ],
            [
                'course_id' => 1,
                'user_id' => 1,
                'title' => 'Third Content',
                'file_name' => 'third_file.jpg',
                'kind' => 'image',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 3,
            ],
            [
                'course_id' => 2,
                'user_id' => 1,
                'title' => 'Four Content',
                'file_name' => 'first_file.pdf',
                'kind' => 'pdf',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 1,
            ],
            [
                'course_id' => 2,
                'user_id' => 1,
                'title' => 'Five Content',
                'file_name' => 'second_file.docx',
                'kind' => 'doc',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 2,
            ],
            [
                'course_id' => 2,
                'user_id' => 1,
                'title' => 'Six Content',
                'file_name' => 'third_file.jpg',
                'kind' => 'image',
                'opened' => now(),
                'created' => now(),
                'modified' => now(),
                'deleted' => null,
                'sort_no' => 3,
            ],
        ]);
    }
}
