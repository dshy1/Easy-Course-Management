<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portalController extends Controller
{
    public function portalIndex(){
        return view('portal.dashboard');
    }
}
