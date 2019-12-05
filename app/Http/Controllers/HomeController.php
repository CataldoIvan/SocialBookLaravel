<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     // lo comento porque lo voy a usar en PostController
    // public function index()
    // {
    //     return view('muro');
    // }
}
