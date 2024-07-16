<?php

namespace Database\Seeders;

use App\Models\Lab1\Article;
use App\Models\Lab1\Image;
use App\Models\Lab1\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
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
        //         'rating' => rand(1,5),
        //         'rateable_type'=>Article::class,
        //         'rateable_id'=>rand(1,10),

        //     ];
        // }
        // $data = [];
        // for ($i = 0; $i < 10; $i++) {
        //     $data[] = [
        //         'user_id' =>rand(1,10),
        //         'rating' => rand(1,5),
        //         'rateable_type'=>Image::class,
        //         'rateable_id'=>rand(1,10),

        //     ];
        // }
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' =>rand(1,10),
                'rating' => rand(1,5),
                'rateable_type'=>Video::class,
                'rateable_id'=>rand(1,10),

            ];
        }
        // dd($data);
        DB::table('ratings')->insert($data);
    }
}
