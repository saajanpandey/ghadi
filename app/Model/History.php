<?php

namespace App\Model;

use App\ads;
use App\User;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function ads()
    {
        return $this->belongsToMany(ads::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
