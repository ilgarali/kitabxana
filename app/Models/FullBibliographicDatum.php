<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class FullBibliographicDatum extends Model
{
    use Translatable;
    protected $translatable = ['title','slug','text'];
}
