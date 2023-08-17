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


    public function statusHometask() {
        return $this->hasOne(StatusHometask::class, 'hometask_id', 'id');
    }

//    public function state()
//    {
//        return $this->belongsTo(StatusHometask::class, 'hometask_id', 'id');
//    }
//


//    public function state()
//    {
//        return $this->hasMany(Comment::class, 'post_id', 'id');
//    }
}
