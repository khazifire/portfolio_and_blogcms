@extends('layouts.dash')
@section('content')
@foreach ($posts as $post)
<a href="#" class="block py-1 mt-4 text-primary hover:underline">
    <h3 class="font-medium  hover:underline">{{$post->title}}</h3>
    <p class="mt-2 text-sm ">{{date('jS M Y', strtotime($post->updated_at))}}</p>
</a>
@endforeach
@endsection
        

