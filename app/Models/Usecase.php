<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usecase extends Model
{
    use HasFactory;

    protected $table = 'usecases';

    protected $fillable = [
        'title',
        'use_case',
        'serial_no'
    ];
}
