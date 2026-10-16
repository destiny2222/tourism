<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdteaInquiry extends Model
{
    use HasFactory;

    protected $table = 'adtea_inquiries';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'message',
        'status',
    ];
}
