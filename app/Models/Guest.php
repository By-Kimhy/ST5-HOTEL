<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table='guests';
    protected $fillable=['guest_name','guest_contact'];
    use HasFactory;
}
