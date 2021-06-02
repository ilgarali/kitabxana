<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class NewBook extends Model
{
    use Translatable;
    protected $translatable = ['title','slug','text'];

    public function myMenu(): BelongsTo
    {
        return $this->belongsTo(MyMenu::class, 'menu_id', 'id')->with('myslug');
    }
    /**
     * Get the month that owns the NewBook
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function month(): BelongsTo
    {
        return $this->belongsTo(KivMonth::class, 'month_id', 'id');
    }
}
