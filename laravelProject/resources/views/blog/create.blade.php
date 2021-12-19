@extends('layouts.dash')
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



<form action="/blog" method="POST" enctype="multipart/form-data" class="">
    @csrf
        <div >
            <label class="block text-primary text-xl font-bold mb-2" for="description">Title</label>
            <input 
                type="text"
                name="title"
                placeholder="What are you going to write about today?"
                class="shadow appearance-none border rounded w-full py-2 px-3 mb-4 text-primary text-md leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="rounded-sm   mb-4">
            <label class=" block text-primary text-xl font-bold mb-2 ">
                Upload Blog header
            </label>
            <input type="file" name="image" class="text-xl">
            
        </div>
    


    <label class="block text-primary text-xl font-bold mb-2" for="description">Description</label>
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


  @endsection