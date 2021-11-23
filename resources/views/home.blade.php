@extends('layouts.dash')
@section('content')
    @empty($posts)  
    <h4 class="text-lg text-primary font-medium title-font mb-2 mt-2">You did not write anything yet?</h4>
    @else

        @foreach ($posts as $post)
        <div class="flex justify-between ">
            <a href="/blog/{{$post->slug}}" class="block py-1 mt-4 text-primary hover:underline">
                <h3 class="font-medium  hover:underline">{{$post->title}}</h3>
                <p class="mt-2 text-sm ">{{date('jS M Y', strtotime($post->updated_at))}}</p>
            </a>
        {{-- check if logged, and if the login user is the one that created the post --}}
            @if(isset(Auth::user()->id)&& Auth::user()->id == $post->user_id)
            <div class="mt-2  lg:flex-shrink-0">
                <span class=" text-sm inline-flex  text-primary text-md mr-4 px-4 py-1  hover:border-primary border-2 border-transparent">
                    <form action="/blog/{{$post->slug}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="outline-none">Delete Post</button>
                    </form>
                </span>

                <a href="/blog/{{$post->slug}}/edit" class=" inline-flex py-1 px-4 rounded-lg bg-secondary border-2 border-transparent text-primary text-md mr-4 focus:bg-other hover:border-primary">
                Edit Post </a>    
            </div>
            @endif
        </div>

        @endforeach
            
    @endif
@endsection
        

