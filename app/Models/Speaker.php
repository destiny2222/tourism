<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    public $fillable  = [ 
      'name',
      'image',
      'position',
      'event_id',
    ];

    public function event(){
      return $this->belongsTo(Event::class);
    }
}
