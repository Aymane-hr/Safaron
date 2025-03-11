<?php

namespace App\Http\Controllers\client\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('client.profile.dashboard.index');
    }
}
