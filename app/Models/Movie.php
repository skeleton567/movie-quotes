<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded =['id'];
    public $translatable = ['name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function quotes(): HasMany
    {
        return $this->hasMany('App\Models\Quote');
    }

    public function getNameAttribute($name)
    {
        return ucwords($name);
    }
}
