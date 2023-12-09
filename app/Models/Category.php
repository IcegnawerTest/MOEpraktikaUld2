<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "id",
        "title"
    ];

    /*
    public function products()
    {
        return $this->hasMany(Course::class);
    }
    */

    public $timestamps = false;
}
