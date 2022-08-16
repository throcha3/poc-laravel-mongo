<?php

namespace App\Observers;

use App\Models\{
    Log
};

class AuditObserver
{
    public function updating($model)
    {
        $user = \Auth::user();

        $log = new Log();
        $log->model = get_class($model);
        $log->old = json_encode($model->getOriginal());
        $log->new = json_encode($model);
        $log->user()->associate($user);

        $log->save();
    }

    public function updated($model)
    {
        //dd('testes');
    }
}
