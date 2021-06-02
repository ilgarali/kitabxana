<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class KivMonth extends Model
{
    use Translatable;
    protected $translatable = ['month'];
    /**
     * Get all of the kivs for the KivMonth
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function months(): BelongsToMany
    {
        return $this->belongsToMany(KivMonth::class, 'month_year', 'kiv_year_id', 'kiv_month_id');
    }

    public function kivs(): HasMany
    {
        return $this->hasMany(Kiv::class, 'month_id', 'id');
    }
    public function books($id): HasMany
    {
        return $this->hasMany(NewBook::class, 'month_id', 'id')->where('category_id',$id)->withTranslation('en','ru');
    }
}
