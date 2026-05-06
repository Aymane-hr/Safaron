<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->with('voyage')->get();
        return view('wishlist', compact('wishlist'));
    }

    public function toggle(Request $request, Voyage $voyage)
    {
        if (!Auth::check()) {
            return response()->json(['status' => 'unauthorized'], 401);
        }

        $wishlist = Wishlist::where('user_id', Auth::id())
                            ->where('voyage_id', $voyage->id)
                            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Wishlist::create([
                'user_id' => Auth::id(),
                'voyage_id' => $voyage->id
            ]);
            return response()->json(['status' => 'added']);
        }
    }
}
