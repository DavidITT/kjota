<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public $fillable = ['name', 'description',' slug', 'status'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //One to Many
    public function subCategories(){
        return $this->hasMany('App\Models\SubCategory');
    }
}
