<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function quotes()
    {
        return $this->hasMany('App\Models\Quote');
    }

    public function getNameAttribute($name)
    {
        return ucwords($name);
    }
}
