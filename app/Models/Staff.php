<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staff';
    protected $fillable=['name','staff_contact','staff_shift','position'];
    use HasFactory;
}
