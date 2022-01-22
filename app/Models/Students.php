<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    // public function roomClasses() {
    //     return $this->hasOne(RoomClasses::class,'id','room_class_id');
    // }

    public function room() {
        return $this->belongsTo(RoomClasses::class,'room_class_id','id');
    }
}
