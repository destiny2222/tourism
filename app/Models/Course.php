<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Course extends Model
{
    use HasFactory;

    public $fillable = [ 
        'image',
        'name',
        'description',
        'slug',
        'category_id'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }


    public function getSlugAttribute(){
        return Str::slug($this->name);
    }

    public function category(){
        return $this->belongsTo(CourseCategory::class);
    }
}
