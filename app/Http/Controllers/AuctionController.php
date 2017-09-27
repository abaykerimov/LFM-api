<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuctionController extends Controller
{
    public function index() {
        $auctions = Auction::all();
        return response()->json($auctions);
    }

    public function store(Request $request, Auction $auction) {
        $auction->create($request->all());
        return response()->json($auction);
    }

    public function show($id, Auction $auction) {
        $item = Auction::findOrFail($id)->get();
        $item->offers = $auction->offers()->get();
        return response()->json($auction);
    }
}
