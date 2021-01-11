<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSecondaryImage extends Model
{
    protected $table="product_secondary_images";

    public function homeOrder(){

        return $this->hasMany(HomeOrder::class, "product_secondary_image_id");

    }
}
