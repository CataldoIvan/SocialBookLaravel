<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{

     public function index()
     {
         $posts = Post::all();
         return view('home',['posts' => $posts]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreatePost(Request $request)
    {
        $this->validate($request, [
          'title' => 'required|max:160',
          'review' =>'required|max:1000'
        ]);

        $post = new Post();
        $post -> title = $request['title'];
        $post-> review = $request['review'];
        $message = "Hubo un error en tu posteo";
        if($request->user()->posts()->save($post)){
          $message = "Tu posteo se ha publicado!";
        }
        return redirect()->route('home')->with(['message' => $message]);
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


    public function destroy(Request $id)
    {
       $post=Post::find($id['id']);
       $post->delete();


        return redirect()->back();

    }
}
