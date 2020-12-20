<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            "title"=>"Belajar Laravel",
            "content"=>"model",
            "featured_imaged"=>"image"
        ]);
    }
}
