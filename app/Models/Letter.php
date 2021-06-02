<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class Letter extends Model
{
    use Translatable;
    protected $translatable = ['letter'];

    public function myMenu(): BelongsTo
    {
        return $this->belongsTo(Slug::class, 'slug_id', 'id');
    }

    /**
     * Get all of the eBooks for the Letter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eBooks($id): HasMany
    {
        return $this->hasMany(EBook::class, 'letter_id', 'id')->where('menu_id',$id);
    }

    /**
     * Get all of the phonetics for the Letter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phonetics(): HasMany
    {
        return $this->hasMany(Phonetic::class, 'letter_id', 'id');
    }
}
