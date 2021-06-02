<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Homebook extends Model
{
    use Translatable;
    protected $translatable = ['title','author','text','slug'];
    /**
     * Get the slug that owns the Homebook
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Slug::class, 'slug_id', 'id');
    }
}
