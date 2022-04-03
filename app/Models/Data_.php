<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_ extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [
        'achievement',
        'target',
        'user_id',
        'active_membership',
    ];
}