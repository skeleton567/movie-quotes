<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
