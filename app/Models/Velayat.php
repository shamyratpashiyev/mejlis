<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velayat extends Model
{
    use HasFactory;

    protected $fillable = ['name_tm', 'name_ru', 'name_en'];
}
