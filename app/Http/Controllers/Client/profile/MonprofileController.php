<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonprofileController extends Controller
{

    public function index(){
        $user = auth()->user(); 
        return view('client.profile.monprofile.index', compact('user'));
    }

}
