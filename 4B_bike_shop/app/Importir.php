<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Importir extends Model
{
    protected $guarded = [];

    public function importir()
    {
        return $this->hasMany('App\product');
    }
}
