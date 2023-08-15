<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendshipGroupDeputy extends Model
{
    use HasFactory;

    protected $table = "friendship_group_deputies_pivot";
    public $timestamps = false;
}
