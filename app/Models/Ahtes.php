<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ahtes extends Model
{
    use HasFactory,  Notifiable;

    public $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'organization',
        'position',
        'language',
        'interpreter',
        'hotel',
        'visa',
        'source',
        'country',
        'register_as',
        'package',
        'exhibition',
        'pavilion',
        'status',
     ];
}
