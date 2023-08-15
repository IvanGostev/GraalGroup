<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHometask extends Model
{
    use HasFactory;
    protected $table = "user_hometasks";
    protected $guarded = false;
}
