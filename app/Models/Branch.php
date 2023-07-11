<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    public $fillable = ['name', 'address', 'phone', 'status'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
