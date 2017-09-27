<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Auction extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'player_id',
        'initial_cost',
        'final_cost',
        'team_id',
        'auctions_option_id',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function player() {
        return $this->hasOne(Player::class);
    }

    public function auctionOption() {
        return $this->belongsTo(AuctionsOption::class);
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }
}
