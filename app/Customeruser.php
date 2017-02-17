<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customeruser extends Model
{
    protected $table = "customeruser";

    protected $fillable = ["customer_id","user_id"];

    protected $hidden = ["created_at", "updated_at", "id", "_token"];

    public $timestamps = false;
}
