<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCooperation extends Model
{
    use HasFactory;

    protected $fillable = ['title_tm', 'title_ru', 'title_en', 'description_tm', 'description_ru', 'description_en', 'event_date',
                            'category_id', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6'];
}
