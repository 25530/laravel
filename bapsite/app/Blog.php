<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'desc', 'tijd', 'pub_date','image'];

    public function getPriceDisplay()
    {
        return '$ ' . $this->tijd;
    }
}
