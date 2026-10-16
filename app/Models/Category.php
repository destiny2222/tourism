<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
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

    public function post()
    {
        return $this->hasMany(Post::class, 'category_id');    
    }
}
