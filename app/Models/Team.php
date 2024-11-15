<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    //

    public function patients(): HasMany
    {

        return $this->hasMany(Patient::class);
    }

    public function members(): BelongsToMany
    {

        return $this->belongsToMany(User::class);
    }
}
