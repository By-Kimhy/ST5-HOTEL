<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table='room_types';
    protected $fillable=['roomType_name','roomType_price','roomType_Description','roomType_bed','roomType_Capacity'];
    use HasFactory;
}
