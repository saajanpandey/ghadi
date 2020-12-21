<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{

    // one to many but inversed 
    public function ad()
    {
        return $this->belongsTo(ads::class,'ads_id','id');
    }
}
