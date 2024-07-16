<?php

namespace Database\Seeders;

// use App\Models\Lab1\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => Str::random(15),
                'content' => Str::random(100)

            ];
        }
        // dd($data);
        DB::table('articles')->insert($data);
    }
}
