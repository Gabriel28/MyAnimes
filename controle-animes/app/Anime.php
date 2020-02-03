<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function session()
    {
        return $this->hasMany(Session::class);
    }
}
