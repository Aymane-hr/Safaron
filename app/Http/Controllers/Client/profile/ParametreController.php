<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParametreController extends Controller
{

    public function index(){
        return view('client.profile.parametres.index');
    }

}
