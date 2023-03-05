<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purches extends Model
{
    use HasFactory;

    protected $table = 'purches';

    protected $fillable = [

        'plane_name',
        'price',
        'expiration_day',
        'plane_id',
        'user_id'
    ];
}
