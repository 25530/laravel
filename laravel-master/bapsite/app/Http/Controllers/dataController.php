<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    public function list(){
        $blog = DB::table('data')->paginate(4);
        
        // data ophalen
        // In een variabelen opslaan

        //Een view teruggeven
        return view('blog.list', ['blog' => $blog]);
    }

    public function details(){
        // Haal uit data base waar id = $id
        $blog = DB::table('data')->paginate(4);

        return view('blog.details', ['blogo' => $blog]);
    }
}
