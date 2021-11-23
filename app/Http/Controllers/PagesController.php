<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
class PagesController extends Controller
{
    public function index(){
        return view('index')
        ->with('post', Post::latest()->first());
    }
}
