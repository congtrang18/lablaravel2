<?php

namespace App\Models\Lab1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'rating',
        'rateable_type',
        'rateable_id',
    ];
    public function rateable(){
        return $this->morphTo();
    }
}

