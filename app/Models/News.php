<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class News extends Model
{
    use Translatable;
    protected $translatable = ['title','text','slug'];
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Slug::class, 'slug_id', 'id');
    }
}
