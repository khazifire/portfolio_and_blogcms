<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('posts', Post::orderBy('updated_at', 'DESC')
            ->get());
    }
}
