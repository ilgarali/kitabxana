<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Mp3 extends Model
{
    use Translatable;
    protected $translatable = ['title'];
}
