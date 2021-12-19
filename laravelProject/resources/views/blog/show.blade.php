 @extends('layouts.app')
 @section('content')



  <section class="bg-primary px-2 sm:px-6 md:px-18 lg:px-40">
    <div class="container px-6 py-16 mx-auto text-center">
        <div class="max-w-lg mx-auto">
            <span class="text-secondary font-semibold">Category here</span>
            <h1 class="text-3xl font-bold text-other md:text-4xl">{{$post->title}}</h1>
            <p class="mt-6 text-other">By {{$post->user->name}} created on <span>{{date('jS M Y', strtotime($post->updated_at))}} </span></p>
        </div>

        <div class="flex justify-center mt-10">
            <div class="w-full h-64 rounded-xl md:w-4/5">
                <img class="w-full h-full object-cover rounded-lg" src="{{asset('images/'.$post->image_path)}}" alt="{{$post->title}}">
            </div>
        </div>
    </div>
</section>



<!-- TODO post content  -->
<section class="bg-other px-8 sm:px-16 md:px-32 lg:px-56">
<div class="relative ">
    <svg data-name="Layer 1"  class="top-0 w-full overflow-hidden absolute left-2 right-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path fill="#F4B943" d="M1200 0L0 0 598.97 10 1200 0z" ></path>
      </svg>
</div>

<article class=" container  py-16 mx-auto   ">
    <div class="mt-2 shadow-inner px-12 py-16 bg-other text-primary leading-8 text-md">
        {!! Parsedown::instance()->text($post->description) !!}
    </div>
    
   

</article>
</section>
<!-- TODO CTA  -->
<section class=" bg-primary px-2 sm:px-6 md:px-18 lg:px-40">

<div class="relative">
    <svg data-name="Layer 1"  class="top-0 w-full overflow-hidden absolute left-2 right-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path fill="#F4B943" d="M1200 0L0 0 598.97 10 1200 0z" ></path>
      </svg>
</div>
<div class="container px-6 py-16 mx-auto">
    <div class="items-center lg:flex lg:justify-center">
        <div class="w-full lg:w-1/3">
            <div class=" ">
                <h1 class=" text-2xl font-semibold text-other lg:text-3xl">Subscribe To My <span class="text-secondary">Newsletter</span></h1>

                <p class=" mt-4 text-other dark:text-gray-400">Be the first to knows when a new  <span class="font-medium text-secondary">Blog</span> is created</p>

            </div>
        </div>

        <div class="flex flex-col mt-8 space-y-3 lg:space-y-0 lg:flex-row ">
            <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-other border border-other rounded-lg text-primary  focus:outline-none focus:ring" placeholder="Email Address">   
            <button class="w-full px-4 py-2 text-sm  text-primary font-medium tracking-wide capitalize transition-colors duration-200 transform bg-secondary rounded-lg lg:w-auto lg:mx-4 hover:bg-indigo-400 focus:outline-none focus:bg-indigo-400">
                        Subscribe
                    </button>
        </div>
    </div>
</div>
</section> 

 @endsection