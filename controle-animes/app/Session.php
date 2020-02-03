<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function epsodies()
    {  
        return $this->hasMany(Episodes::class);
    }

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
