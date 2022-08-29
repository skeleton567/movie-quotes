<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded =['id'];
    public $translatable = ['name'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
