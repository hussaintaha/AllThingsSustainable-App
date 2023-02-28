<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function reviewsAsc()
    {
        return $this->hasMany('App\Review');
    }

    public function reviewsDesc()
    {
        return $this->hasMany('App\Review');
    }
}
