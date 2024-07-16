<?php

namespace Database\Seeders;

use App\Models\Lab1\Article;
use App\Models\Lab1\Image;
use App\Models\Lab1\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommnentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $article=Article::query()->first();
        // $data = [];
        // for ($i = 0; $i < 10; $i++) {
        //     $data[] = [
        //         'user_id' =>rand(1,10),
        //         'content' => \Str::random(50),
        //         'commentable_type'=>Article::class,
        //         'commentable_id'=>$article->id,

        //     ];
        // }
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' =>rand(1,10),
                'content' => Str::random(50),
                'commentable_type'=>Video::class,
                'commentable_id'=>rand(1,10),

            ];
        }
        // dd($data);
        DB::table('comments')->insert($data);
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' =>rand(1,10),
                'content' => Str::random(50),
                'commentable_type'=>Image::class,
                'commentable_id'=>rand(1,10),

            ];
        }
        // dd($data);
        DB::table('comments')->insert($data);
    }
}
