@extends('layouts.app')
 @section('content')


@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error )
            <li class="w-1/5 mv-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
        @endforeach
    </ul>
</div>

@endif

<div class="w-4/5 m-auto  bg-mid px-12 pt-8">
    <h1 class="text-other text-center text-2xl font-bold">New Blog Post</h1>
<form action="/blog" method="POST" enctype="multipart/form-data" class="py-10">
    @csrf

    
        <div >
            <label class="block text-other text-xl font-bold mb-2" for="description">Title</label>
            <input 
                type="text"
                name="title"
                placeholder="What are you going to write about today?"
                class="shadow appearance-none border rounded w-full py-2 px-3 mb-4 text-primary text-md leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="border-2 rounded-sm border-secondary w-32 p-2 mb-4">
            <label class=" block text-other text-xl font-bold hover:text-secondary">
                <span class=" text-base leading-normal">Cover Image</span>
                <input type="file" name="image" class="hidden">
            </label>
            
        </div>
    


    <label class="block text-other text-xl font-bold mb-2" for="description">Description</label>
    <textarea 
        name="description"
        placeholder="what is your topic all about?"
        class="mt-1 shadow appearance-none border rounded  text-primary text-md leading-tight focus:outline-none focus:shadow-outline w-full h-80  outline-none">
    </textarea>

    <div class=" flex justify-center mt-4">
        <button class="bg-secondary  text-primary py-2 px-24 text-xl rounded focus:outline-none focus:shadow-outline hover:border-other" type="submit">
            Create Post
        </button>
    </div>
    
</form>
</div>

  @endsection