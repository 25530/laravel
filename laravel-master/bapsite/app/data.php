<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable = ['title','desc'];

    public function getPriceDisplay()
    {
        return '$ ' . $this->price;
    }
}
