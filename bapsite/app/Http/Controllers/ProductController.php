<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($id, Request $request)
    {
       //return 'The value of of GET parameter showform = ' . $request->get('show_form');
        //return view('product', ['id' => $id ]);
        dd($id);
    }
}
