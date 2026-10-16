<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contestant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country',
        'department',
        'career',
        'slug', 
        'institution',
        'photo',
        'votes',
        'unique_id'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getSlugAttribute()
    {
        return  Str::slug($this->name);
    }

    // generate unique id e.g contestant p01 when a contestant is created
    public function getUniqueId()
    {
        return "p{$this->id}";
    }

    // Automatically set unique_id before creating
    protected static function booted()
    {
        static::creating(function ($contestant) {
            // Temporarily set unique_id, will update after creation
            $contestant->unique_id = '';
        });

        static::created(function ($contestant) {
            $contestant->unique_id = "p{$contestant->id}";
            $contestant->saveQuietly();
        });
    }


    protected $casts = [
        'votes' => 'integer',
    ];
}
