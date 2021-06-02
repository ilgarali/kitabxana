<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Homedata extends Model
{
    use Translatable;
    protected $translatable = [
        'about_text','about_title',
        'about_long_text','about_button',
        'new_title','new_button',
        'video_title','page_button',
        'base_title','virtual_title',
        'galery_title','galery_subtitle',
        'news','news_button_1','quotes_title',
        'follow_us','follow_placeholder','follow_button'
    ];
}
