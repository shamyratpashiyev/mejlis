<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TkmEconomy extends Model
{
    use HasFactory;


    public $table = 'tkm_economy';

    public $fillable = ['title_tm','title_ru', 'title_en', 'content_tm', 'content_ru', 'content_en',];
}
