<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'model',
        'old',
        'new',
        'user_id'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
