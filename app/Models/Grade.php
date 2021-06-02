<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class Grade extends Model
{
    use Translatable;
    protected $translatable = ['grade'];

    /**
     * Get all of the lessons for the Grade
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'grade_id', 'id');
    }
}
