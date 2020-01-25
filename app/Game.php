<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['username', 'users_score', 'opp_score', 'won'];
}
