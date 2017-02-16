<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    protected $fillable = ["name", "description", "address", "active"];

    protected $hidden = ["created_at", "updated_at", "id"];
}
