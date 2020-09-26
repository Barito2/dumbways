<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function importir()
    {
        return $this->belongsTo('App\Importir');
    }
}
