<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class commentController extends Controller
{
    public function index()
    {
        
    }

  
   public function create(Request $request)
   {   
      /*  dd($request->comment); */
       if($request->comment==null){
           return redirect('/home');
       }else{
       $comment=new Comment();
        $comment->comment=$request['comment'];
        $comment->user_id=$request['user_id'];
        $comment->post_id=$request['post_id'];
        $comment->save();
        return redirect('/home');
       }
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
       $comment=Comment::find($id['id']);
      $comment->delete();


       return redirect()->back();

   }
}
