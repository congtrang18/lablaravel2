<?php

namespace App\Models\Lab1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'url',
    ];
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
