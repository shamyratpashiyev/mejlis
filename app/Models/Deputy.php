<?php

namespace App\Models;

use App\Models\Velayat;
use App\Models\Committee;
use App\Models\ElectionDistrict;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deputy extends Model
{
    use HasFactory;

    protected $fillable = ['fullname_tm','fullname_ru','fullname_en', 'biography_en', 'biography_tm', 'biography_ru', 'birth_year_tm', 'birth_year_ru',
                            'birth_year_en', 'position_tm', 'position_ru', 'position_en', 'email', 'velayat_id', 'election_district_id'];

    public function committees(){
        return $this->belongsToMany(Committee::class, 'deputy_committee', 'deputy_id', 'committee_id');
    }

    public function district(){
        return $this->belongsTo(ElectionDistrict::class, 'election_district_id');
    }

    public function velayat(){
        return $this->belongsTo(Velayat::class, 'velayat_id');
    }
}
