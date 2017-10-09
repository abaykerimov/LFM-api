<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


// TEST
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    protected $casts = [
//        'is_admin' => 'boolean',
//    ];

//    public function getAuctionOptions() {
//        return $this->hasMany(AuctionsOption::class);
//    }
//
//    public function auctions() {
//        return $this->hasMany(Auction::class);
//    }
//
//    public function offers() {
//        return $this->hasMany(Offer::class);
//    }

    // TEST
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
