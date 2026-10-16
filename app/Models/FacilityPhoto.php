<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityPhoto extends Model
{
    use HasFactory;
    public $fillable = [
        'image',
        'facility_id',
        'user_id'
    ];

    public function schfacility(){
        return $this->belongsTo(SchoolFacility::class);
    }
    
}
