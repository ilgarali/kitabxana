<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class MyMenu extends Model
{
    use Translatable;
    protected $translatable = ['menu_name','slug'];

    /**
     * Get all of the category for the MyMenu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category(): HasMany
    {
        return $this->hasMany(MyMenu::class, 'parent_id', 'id')->withTranslation('en','ru');
    }


    public function categoryParent(): BelongsTo
    {
        return $this->belongsTo(MyMenu::class, 'parent_id', 'id')->withTranslation('en','ru');
    }
    /**
     * Get the slug that owns the MyMenu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function myslug(): BelongsTo
    {
        return $this->belongsTo(Slug::class, 'slug_id', 'id');
    }

    /**
     * Get all of the books for the MyMenu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(EBook::class, 'menu_id', 'id');
    }
}
