<?php

namespace App\Models;

use App\Models\Deputy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FriendshipGroup extends Model
{
    use HasFactory;

    protected $fillable = ['title_tm', 'title_ru', 'title_en', 'description_tm', 'description_ru', 'description_en', 'flag_1', 'flag_2', 'published_date'];

    public function members(){
        return $this->belongsToMany(Deputy::class, 'friendship_group_deputies_pivot','friendship_group_id', 'deputy_id');
    }
}
