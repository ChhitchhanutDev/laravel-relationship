<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'created_at',
        'updated_at'
    ];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
