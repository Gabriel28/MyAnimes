<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    public function sesssion()
    {
        return $this->belongsTo(Session::class);
    }
}
