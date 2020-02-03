<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    public function sesssions()
    {
        return $this->belongsTo(Session::class);
    }
}
