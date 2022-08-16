<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\ObservantTrait;

class BaseModel extends Model
{
    use HasFactory, ObservantTrait;
}
