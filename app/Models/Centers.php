<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centers extends Model
{
    use HasFactory;

    protected $table = "centers";
    protected $primary_key = "id";

    protected $guarded = [];
}
