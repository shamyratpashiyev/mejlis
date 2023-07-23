<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeputyCommittee extends Model
{
    use HasFactory;

    protected $table = 'deputy_committee';
    protected $fillable = ['deputy_id', 'committee_id'];
}
