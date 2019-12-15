<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class SearchController extends Controller
{
    public function search(Request $request){

        $searchinput=$request->input('search');
       // dd($searchinput);//

         $searchOfUser=User::where('name','Like','%'.$searchinput.'%')->get();
         // no puedo hacer que busque en el modelo de libro en conjut=nto con usuarios, solo busca usuarios o libros
       // $searchOfUser=Book::where('name','Like','%'.$searchinput.'%')->get();

        return view('search.result',compact('searchOfUser'));

    }
}
