<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Kiv extends Model
{
    use Translatable;
    protected $translatable = ['title'];
    public function myMenu(): BelongsTo
    {
        return $this->belongsTo(MyMenu::class, 'menu_id', 'id')->with('myslug');
    }
    /**
     * Get the year that owns the Kiv
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function year(): BelongsTo
    {
        return $this->belongsTo(KivYear::class, 'year_id', 'id');
    }

    public function month(): BelongsTo
    {
        return $this->belongsTo(KivMonth::class, 'month_id', 'id');
    }
}
