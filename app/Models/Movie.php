<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'date',
        'desc',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
