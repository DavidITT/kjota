<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public $fillable = ['name', 'description', 'slug', 'priority', 'popular_category', 'parent_id', 'status'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //One to One
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    // One to Many
    public function subcategories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

}
