<?php

namespace App;
use App\images;
use App\Model\Brand;
use App\Model\Category;
use App\User;
use App\Model\History;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    protected $fillable = [
        'product_name','product_price','product_brand',
    ];

    // this is one to many relationship between ads and images. Relationship are by mouth words.
        public function images()
        {
            return $this->hasMany(images::class,'ads_id','id');
        }

        public function users()
        {
            return $this->belongsToMany(User::class)->withTimestamps();
        }

        public function categories()
        {
           return $this->belongsToMany(Category::class)->withTimestamps();
        }

        public function brands()
        {
            return $this->belongsTo(Brand::class);
        }

    public function history()
    {
        return $this->belongsToMany(History::class)->withTimestamps();
    }
}


