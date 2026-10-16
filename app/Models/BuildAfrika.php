<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildAfrika extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'position',
        'image',
        'edition',
    ];
}
