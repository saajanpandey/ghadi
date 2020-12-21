<?php

namespace App\Model;

use App\ads;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
        'name'
    ];

    public function ads()
    {
        return $this->hasMany(ads::class)->withTimestamps();
    }
}
