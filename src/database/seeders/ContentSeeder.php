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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
                'body' => 'アリスは川辺でおねえさんのよこにすわって、なんにもすることがないのでとても退屈（たいくつ）しはじめていました。一、二回はおねえさんの読んでいる本をのぞいてみたけれど、そこには絵も会話もないのです。「絵や会話のない本なんて、なんの役にもたたないじゃないの」とアリスは思いました。そこでアリスは、頭のなかで、ひなぎくのくさりをつくったら楽しいだろうけれど、起きあがってひなぎくをつむのもめんどくさいし、ど',
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
