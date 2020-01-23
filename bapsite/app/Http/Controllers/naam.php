<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class naam extends Controller
{
    public function list(){
        $companies = DB::table('users')->orderBy('date')->get();
        //$companies = DB::table('users')->where('id','=','3')->get();

        return view('company.list ',['bedrijven' => $companies]);
    }
}
