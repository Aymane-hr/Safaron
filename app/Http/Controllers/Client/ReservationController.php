<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Request $request){
        dd($request);
        return view('client.reservations.create');
    }
}
