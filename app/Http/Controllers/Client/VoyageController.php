<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index(){

        return view('client.voyages.index');
    }
    public function detail(){

        return view('client.voyages.detail');
    }
}
