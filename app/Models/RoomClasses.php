<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomClasses extends Model
{
    protected $table = 'room_classes';

    public function students() {
        return $this->hasMany(Students::class,'room_class_id','id');
    }

    public function getAllStudent()
    {
        return $this->students();
    }
}
