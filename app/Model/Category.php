<?php

namespace App\Model;

use App\ads;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name'
    ];

    public function ads()
    {
        return $this->belongsToMany(ads::class)->withTimestamps();
    }
}
