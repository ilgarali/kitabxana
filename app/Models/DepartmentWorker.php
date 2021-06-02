<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class DepartmentWorker extends Model
{
    use Translatable;
    protected $translatable = ['fullname','post','info'];
}
