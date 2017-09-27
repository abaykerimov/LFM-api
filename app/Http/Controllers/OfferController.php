<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OfferController extends Controller
{
    public function store(Request $request, Offer $offer) {
        $offer->create($request->all());
        return response()->json($offer);
    }
}
