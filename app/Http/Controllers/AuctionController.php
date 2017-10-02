<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    public function index() {
		/*$auctions = Auction::leftjoin('offers as o', 'o.auction_id', '=', 'auctions.id')
		   ->orderBy('o.created_at', 'desc')
		   ->select('auctions.*')       
		   ->with('offers')
			->with('owner')
			->distinct()
		   ->get();*/
		
		
        $auctions = Auction::orderBy('updated_at', 'desc')->get();
		foreach($auctions as $auction) {
			if ($auction->offers->isNotEmpty()){
				$auction->offers = Auction::whereId($auction->offers)->get();
				
			}
			$auction->owner = Auction::whereId($auction->owner)->get();
		
		}
        return response()->json($auctions);
    }

    public function store(Request $request, Auction $auction) {
        $auction->create($request->all());
        return response()->json($auction);
    }

    public function show(Auction $auction) {
        //$item = Auction::findOrFail($id)->get();
        $auction->offers = $auction->offers()->get();
        return response()->json($auction);
    }
}
