<?php

namespace App\Models;

use Database\Factories\CodesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $fillable = ['title_tm', 'title_ru', 'title_en', 'description_tm', 'description_ru', 'description_en','published_date'];
}
