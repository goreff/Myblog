<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::insert([
            [
            'title_post' => 'title_1',
            'id_author' => 3
            ],
            [
                'title_post' => 'title_2',
                'id_author' => 4
            ]]);
    }
}


