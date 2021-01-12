<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    protected $table = "work_images";

    public function work(){
        return $this->belongsTo(Work::class);
    }

}
