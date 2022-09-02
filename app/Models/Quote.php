<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded =['id'];
    public $translatable = ['name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function movie(): BelongsTo
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
