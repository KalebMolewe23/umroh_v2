<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Inertia\Inertia;

class AgenController extends Controller
{
    public function index(){
        return view('agen.dashboard.v_dashboard');
    }
}
