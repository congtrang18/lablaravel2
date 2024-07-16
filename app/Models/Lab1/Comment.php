<?php

namespace App\Models\Lab1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'commentable_type',
        'commentable_id',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
    
}
