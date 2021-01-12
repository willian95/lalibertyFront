<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "works";

    public function workImage(){
        return $this->hasMany(WorkImage::class);
    }
}
