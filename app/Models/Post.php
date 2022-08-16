<?php

namespace App\Models;

use App\ObservantTrait;

class Post extends BaseModel
{
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
