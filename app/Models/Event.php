<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'date',
        'description',
        'time',
        'image',
        'is_active',
        'slug',
        'is_featured',
        'location',
    ];

    public function speaker(){
        return $this->hasMany(Speaker::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    } 

    // public function getformattedAttribute()
    // {
    //     return \Carbon\Carbon::createFromFormat('h i', $this->attributes['time']);
    // }
}
