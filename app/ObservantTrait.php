<?php

namespace App;

use App\Observers\AuditObserver;

trait ObservantTrait
{
    public static function bootObservantTrait()
    {
        static::observe(new AuditObserver);
    }
}
