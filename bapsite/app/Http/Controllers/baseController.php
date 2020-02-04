<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class baseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.post', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

        $blogData = $request->validate(
            [
            'title' => 'required|min:1',
            'desc' => 'required|min:10|max:650',
            'tijd' => 'required|numeric',
            'pub_date' => 'required|after_or_equal:today',
            'image' => 'image'
            ]
            );
            
            $newFilename = $blogData['image']->store('blog', 'public');
            $blogData['image'] = $newFilename;

            Product::create($blogData);

            return redirect()->route('blog.post');
        

           /**  $Blog = new Blog();
            $Blog->title = $blogData['title'];
            $Blog->desc = $blogData['desc'];
            $Blog->tijd = $blogData['tijd'];
            $Blog->pub_date = $blogData['pub_date'];

            $Blog->save();
            return 'Validatie is gelukt';
            */
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
