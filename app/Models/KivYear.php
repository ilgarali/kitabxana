<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KivYear extends Model
{
   
    /**
     * Get all of the kivs for the KivYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kivs(): HasMany
    {
        return $this->hasMany(Kiv::class, 'year_id', 'id');
    }

    /**
     * The months that belong to the KivYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function months(): BelongsToMany
    {
        return $this->belongsToMany(KivMonth::class, 'month_year', 'kiv_month_id', 'kiv_year_id');
    }
  
}
