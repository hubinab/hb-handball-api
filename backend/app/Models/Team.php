<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    public $timestamps = false;

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class, "player_team")->wherePivotNull("to");
    }
}
