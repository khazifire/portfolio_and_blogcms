<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('blog.index')
                ->with('posts', Post::orderBy('updated_at', 'DESC')
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

        return redirect('/blog')->with('message', 'new blog post has been created');
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
