<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class NewbookCategory extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title','slug'];

    public function myMenu(): BelongsTo
    {
        return $this->belongsTo(MyMenu::class, 'menu_id', 'id')->with('myslug');
    }
    /**
     * Get all of the newBooks for the NewbookCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function newBooks(): HasMany
    {
        return $this->hasMany(NewBook::class, 'category_id', 'id');
    }
}
