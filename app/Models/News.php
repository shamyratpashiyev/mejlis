<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title_tm', 'title_ru', 'title_en', 'description_tm', 'description_ru', 'description_en', 'event_date',
                            'image', 'category_id'];
}
