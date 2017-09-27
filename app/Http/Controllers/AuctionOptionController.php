<?php

namespace App\Http\Controllers;

use App\Models\AuctionsOption;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuctionOptionController extends Controller
{
    public function store(Request $request, AuctionsOption $auctionsOption) {
        $auctionsOption->create($request->all());
        return response()->json($auctionsOption);
    }
}
