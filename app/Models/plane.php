<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plane extends Model
{
    use HasFactory;

    protected $fillable = [
           'plane_name',
            'price',
            'expiration_day',
            'number_of_usecase',
            'serial_no',
            'maximum_word_generator',
            'enable_custom_search_search',
            'Status',
            'description'
    ];
}
