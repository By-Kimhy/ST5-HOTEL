<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table='feedback';
    protected $fillable=['Date','comment','guest_id'];
    use HasFactory;
}
