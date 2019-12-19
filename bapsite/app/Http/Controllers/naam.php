<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class naam extends Controller
{
    public function list(){
        $companies = DB::table('users')->get();
        //dd($companies);

        return view('company.lest ',['bedrijven' => $companies]);
    }
}
