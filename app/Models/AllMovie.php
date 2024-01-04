<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllMovie extends Model
{
    use HasFactory;

      protected $fillable = [
        'title',
        'description',
        'time',
        'rating',
        'image',
        'date'

    ];
}
