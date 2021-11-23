 @extends('layouts.app')
 @section('content')



 <!--blog header -->
    <!--TODO fix the padding on the left so it can match the nav bar -->
    <section class="bg-other  sm:pl-6 md:pl-18 lg:pl-24">
        <div class="  lg:flex">
            <div class=" flex items-center  w-full px-6 py-8 lg:py-32 lg:h-128 lg:w-1/2">
                <div class="max-w-xl">
                    <span class="text-secondary font-semibold">Category</span>
                    <h1 class="my-2 text-2xl font-semibold text-gray-800  lg:text-3xl">Blog title goes here yeyeyye</h1>
                    <span>By Dan on Hashnode | Nov 17, 2021</span> 
                    <p class="mt-6 text-sm text-gray-500  lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates...</p>
                    
                    <div class="mt-6 lg:flex-shrink-0">
                        <a href="post.html" class=" inline-flex py-2 px-4 rounded-lg bg-secondary  text-primary text-md mr-4  ">
                        Read More <span>
                            <svg class="pl-1 h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
            
            <div class="w-full h-64 lg:w-1/2 lg:h-auto">
                <div class="w-full h-full bg-cover" style="background-image: url(https://images.unsplash.com/photo-1508394522741-82ac9c15ba69?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=748&q=80)">
                    <div class="w-full h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>  
    </section>

<!--Todo blog content -->
<section class="relative bg-primary text-other body-font px-2 sm:px-6 md:px-18 lg:px-24">
    <svg data-name="Layer 1"  style="top:0; left: 20%; width:100%; overflow:hidden; position:absolute;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path fill="#F4B943" d="M1200 0L0 0 698.97 10 1200 0z" ></path>
      </svg>
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h2 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Recent Blog Posts</h2>
          {{-- <div class="h-1 w-20 bg-indigo-500 rounded">hi there</div> --}}
        
        </div>
      
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Brief description of the types of content i share Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore laboriosam.</p>
      </div>
      <!-- =====================
           blog listing grid
           ===================== -->
      <div class="flex flex-wrap -m-4 ">
         @foreach ($posts as $post)
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-mid bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="images/{{$post->image_path}}" alt="content">
                        <h3 class="tracking-widest text-secondary text-xs font-medium title-font">Design</h3>
                        <h4 class="text-lg text-white font-medium title-font mb-2 mt-2">{{$post->title}}</h4>
                        <p>By {{$post->user->name}} created on <span>{{date('jS M Y', strtotime($post->updated_at))}}</span></p> 
                        <p class="leading-relaxed text-base mt-2">{{$post->description}}</p>
                        
                        <div class="flex items-center flex-wrap mt-4">
                            <a href="/blog/{{$post->slug}}" class="text-secondary inline-flex items-center md:mb-2 lg:mb-0">Keep Reading
                                <svg class="w-4 h-4 ml-2 " viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach 
         
    </div>
  </section> 
  <!-- cta -->
<section class="relative bg-primary px-2 sm:px-6 md:px-18 lg:px-40">
    <svg data-name="Layer 1"  class="top-0 w-full overflow-hidden absolute left-2 right-1"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path fill="#F4B943" d="M1200 0L0 0 598.97 10 1200 0z" ></path>
      </svg>
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