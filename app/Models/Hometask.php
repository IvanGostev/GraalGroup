<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hometask extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "hometasks";
    protected $guarded = false;
//    public function statusHometasks()
//    {
//        return $this->hasMany(StatusHometask::class, 'hometask_id', 'id');
//    }
}
