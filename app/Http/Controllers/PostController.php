<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Comment;

class PostController extends Controller
{

     public function index()
     {

         $posts = Post::orderBy('id','DESC')->get();

         return view('home',['posts' => $posts]);
     }

     public function indexPerfil()
     {

         $posts = Post::orderBy('id','DESC')->get();

         return view('perfil',['posts' => $posts]);
     }



    public function create()
    {
        //
    }


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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $id)
    {

       $post=Post::find($id['id']);
       $post->comment->delete();
       $post->delete();


        return redirect()->back();

    }
}
