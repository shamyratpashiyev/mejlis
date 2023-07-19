<?php

namespace App\Models;

use App\Models\Deputy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Committee extends Model
{
    use HasFactory;

    protected $fillable = ['name_tm', 'name_ru', 'name_en'];

    public function deputies(){
        return $this->belongsToMany(Deputy::class, 'deputy_committee', 'committee_id', 'deputy_id');
    }

    public function committee_head() {
        return $this->belongsTo(Deputy::class, 'committee_head_id');
    }
}
