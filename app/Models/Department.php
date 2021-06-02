<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Department extends Model
{
    use Translatable;
    protected $translatable = ['title','info','text','slug'];
  
   
}
