<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class Slug extends Model
{
    use Translatable;
    protected $translatable =['menu_name','slug'];
      /**
     * Get all of the category for the MyMenu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category(): HasMany
    {
        return $this->hasMany(Slug::class, 'parent_id', 'id')->withTranslation('en','ru');
    }
    /**
     * Get all of the menus for the Slug
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus(): HasMany
    {
        return $this->hasMany(MyMenu::class, 'slug_id', 'id');
    }
}
