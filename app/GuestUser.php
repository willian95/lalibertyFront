<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
    protected $table = "guest_users";
    
    protected $fillable = [
        "name",
        "address",
        "email",
        "phone"
    ];
}
