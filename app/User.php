<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\History;
use App\ads;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','address','phone_number', 'email', 'password','gender'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ads()
        {
            return $this->belongsToMany(ads::class)->withTimestamps();
        }
    public function history()
    {
        return $this->hasOne(History::class);
    }

        public function getFullNameAttribute()
        {
            return "{$this->first_name} {$this->last_name}";
        }
}
