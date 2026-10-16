<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SchoolFacility extends Model
{
    use HasFactory;

    public $fillable = [ 
        'name',
        'description',
        'email',
        'phone',
        'image',
        'publish',
        'facebook',
        'instagram',
        'whatsapp',
        'slug',
        'user_id',
    ];


    public function facilityPhoto(){
        return $this->hasMany(FacilityPhoto::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }
}
