<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        $data = DB::table('maskapais')
        ->where('name_maskapai', 'LIKE', '%'.request('q').'%')
        ->paginate(10);

        return response()->json($data);
    }

    public function provider(){
        $data = DB::table('provider_tickets')
        ->where('name_provider', 'LIKE', '%'.request('q').'%')
        ->paginate(10);

        return response()->json($data);
    }

    public function airport(){
        $data = DB::table('airports')
        ->where('name', 'LIKE', '%'.request('q').'%')
        ->distinct()
        ->paginate(10);

        return response()->json($data);
    }

    public function user(){
        $data = DB::table('users')
        ->where('name', 'LIKE', '%'.request('q').'%')
        ->distinct()
        ->paginate(10);

        return response()->json($data);
    }
}
