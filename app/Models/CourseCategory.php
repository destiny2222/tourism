<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CourseCategory extends Model
{
    use HasFactory;

    public $fillable = [ 
        'name',
        'slug'
    ];


    public function getRouteKeyName(){
        return 'slug';
    }

    public function getSlugAttribute(){
        return Str::slug($this->name);
    }

    public function courses(){
        return $this->hasMany(Course::class, 'category_id');
    }
}
