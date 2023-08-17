<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusHometask extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "status_hometasks";
    protected $guarded = false;

    public function hometask() {
        return $this->belongsTo(Hometask::class, 'id', 'hometask_id');
    }
}
