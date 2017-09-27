<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionsOptions extends Model
{
    protected $fillable = [
        'started_at'
    ];

    protected $dates = ['created_at', 'started_at', 'updated_at'];
}
