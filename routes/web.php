<?php

use App\Models\Lab1\Article;
use App\Models\Lab1\Comment;
use App\Models\Lab1\Video ;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // echo 1;
    // die;
    // return view('welcome');
    // Lấy tất cả các bình luận của một bài viết cụ thể theo kiểu chỏ sang relation:  $article->comments  
  $article=Article::query()->where('id',1)->first();
  $article->comments;

//    Lấy tất cả các đánh giá của một video cụ thể  theo kiểu chỏ sang relation: $video->ratings
$video=Video::query()->where('id',3)->first()->comments;

//    dd($video);
// Lấy tất cả các bình luận của một người dùng cụ thể (có thể dùng join or sử dụng relation)
$user=User::query()->join('comments','comments.user_id','users.id')->where('users.id',2)->get();


// Lấy trung bình đánh giá của một bài viết cụ thể. Gợi ý: 

// $article->ratings()->avg('rating')

$article=Article::query()->where('id',6)->first();
$article->ratings->avg('rating');
// dd($article->ratings->avg('rating'));

// Lấy tất cả các bài viết, video, và hình ảnh được bình luận bởi một người dùng cụ thể . 
// Gợi ý: lấy tất cả comment theo user id,
//  sau đó sử dụng filter của collection để lấy dữ liệu theo từng loại bài viết.
$commentUser=Comment::query()->where('user_id',5)->get();
$test=$commentUser->filter(function($value){
  // dd($value);
  return $value;
});
// dd($test);






});
