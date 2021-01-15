<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    protected $table = "product_purchases";

    public function productColorSize(){
        return $this->belongsTo(ProductColorSize::class);
    }

}
