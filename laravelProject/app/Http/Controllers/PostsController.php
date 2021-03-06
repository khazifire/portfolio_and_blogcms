<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller{
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('blog.index')
                ->with('posts', Post::orderBy('updated_at', 'DESC')
                ->take(6)
                ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'required|mimes:png,jpg,jpeg|max:5048'
        ]);
        $new_image_name= uniqid(). '-' . $request->title. '.' . $request->image->extension();

        $request->image->move(public_path('images'),$new_image_name);

        Post::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug'=> SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' =>$new_image_name,
            'user_id'=> auth()->user()->id,
        ]);

        return redirect('/home')->with('message', 'new blog post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
       return view('blog.show')
            ->with('post',Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug){
        return view('blog.edit')
            ->with('post',Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug){
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'slug'=> SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id'=> auth()->user()->id,
        ]);
        return redirect('/home')->with('message', 'Blog Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug){
        Post::where('slug', $slug)->delete();
        return redirect('/home')->with('message', 'Blog Post has been deleted no turning back sry!');
    }
}
