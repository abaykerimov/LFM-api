<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request, User $user) {
        $users_all = User::all();
        foreach ($users_all as $item) {
            if ($item->id != $request->user_id) {
                $user->create($request->all());
            } else {
                $user = User::find($request->user_id);
            }
        }

        return response()->json($user);
    }
}
