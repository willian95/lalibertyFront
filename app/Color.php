<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{

    use SoftDeletes;

    protected $table = "colors";

    public function productColorSizes(){
        return $this->hasMany(ProductColorSize::class);
    }
}
