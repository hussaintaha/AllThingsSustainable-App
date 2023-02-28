<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'tbl_category';
    public $timestamps = false;

    public function parent() {
      return $this->belongsTo(self::class, 'main_cat');
    }
}
