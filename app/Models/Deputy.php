<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputy extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'biography_en', 'biography_tm', 'biography_ru', 'position_tm', 'position_ru', 'position_en', 'email'];
}
