<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PlayerController extends Controller
{
    public function index(Request $request, Player $player) {
        $keyword = $request->search;
        $query = $player->where('title', 'LIKE', '%'.$keyword.'%')->orderBy('skill', 'DESC')->get()->take(10);
        foreach ($query as $item) {
            $item->team = $item->team()->get();
        }
        return response()->json($query, 200);
    }
}
