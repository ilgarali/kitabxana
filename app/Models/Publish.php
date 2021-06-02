<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Publish extends Model
{
    use Translatable;
    protected $translatable = ['title','text','slug'];
    
    public function myMenu(): BelongsTo
    {
        return $this->belongsTo(MyMenu::class, 'menu_id', 'id')->with('myslug');
    }
}
