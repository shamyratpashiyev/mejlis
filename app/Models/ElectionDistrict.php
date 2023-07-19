<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionDistrict extends Model
{
    use HasFactory;

    protected $fillable = ['name_tm', 'name_ru', 'name_en', 'district_id', 'hq_name_tm', 'hq_name_ru', 'hq_name_en',
                            'borders_tm', 'borders_ru', 'borders_en'];
}
