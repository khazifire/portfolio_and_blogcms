<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | {{ config('app.name', 'Khazifire') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class=" bg-secondary antialiased leading-none font-sans h-screen">
    @if (Auth::check())
    <section class="flex h-full ">
        <div class="flex flex-col w-64  py-8 text-other bg-primary  mr-1">
            <h1 class="text-3xl font-semibold  text-gray-800 mx-3">{{ config('app.name', 'Khazifire') }}</h1>
        
            <div class="flex flex-col  mt-6 mx-2">
                <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">{{ Auth::user()->name }}</h4>
                <p class="mx-2 mt-1 text-sm font-medium text-secondary hover:underline">{{ Auth::user()->email }}</p>
            </div>
            
            <div class="flex flex-col justify-between flex-1 mt-6 ">
                <nav>
                    <a class="flex items-center px-4 py-2  text-gray-600 transition-colors duration-200 transform hover:bg-secondary hover:text-primary" href="/blog">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
        
                        <span class="mx-4 font-medium">Return to Blog</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-700 hover:bg-secondary hover:text-primary" href="/blog/create">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
        
                        <span class="mx-4 font-medium">New Post</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-700 hover:bg-secondary hover:text-primary" href="/home">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
        
                        <span class="mx-4 font-medium">All Post</span>
                    </a>
 
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform hover:bg-secondary"
                        href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
        
                        <span class="mx-4 font-medium">{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </nav>
            </div>
        
        </div>
        
        
        <div class="relative w-full  px-5 py-4 rounded-md bg-mid">

            @if (session()->has('message'))
                <div class="py-10"> 
                    <p class="text-secondary">{{session()->get('message')}}</p>
                </div>
            @endif
          <h2 class="text-xl text-other font-bold mb-2">
          {{--   {{ Request::is('blog/create') ? 'Creating New post' : Request::is('home/') ? 'Recent Post' : 'Updating Post' }} --}}

            @if (Request::is('blog/create') )
                Creating New post
            @elseif (Request::is('home'))
                Recent Post
            @else
                Updating Post
            @endif
        </h2>
            <div class="absolute inset-x-0 px-6 py-3 mx-5 mt-4 overflow-y-auto bg-other border border-gray-300 rounded-md max-h-screen">
                @yield('content')
            
            </div>
        </div>
    </section>   
    @else
    <div class="bg-primary w-full h-full text-other">
        <h1 class="text-6xl">what are you looking for hmhm</h1>
    </div>
        
    @endif

        <footer class=" flex flex-col items-center justify-between  py-4 bg-primary dark:bg-gray-800 sm:flex-row px-2 sm:px-6 md:px-18 lg:px-40 ">
            <a href="#" class="text-xl font-bold text-other dark:text-white dark:hover:text-gray-300">Khazifire</a>
            
            <p class="py-2 text-other sm:py-0">All rights reserved</p>
        
            <div class="flex -mx-2">
                
        
                <a href="#" class="mx-2 text-other  hover:text-gray-500 inline-flex items-center"
                    aria-label="Facebook"> 
                    <svg class="w-5 h-5 fill-current mx-2" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                        </path>
                    </svg>
                </a>
        
                <a href="#" class="mx-2 text-other  hover:text-gray-500 inline-flex items-center"
                    aria-label="Facebook"> 
                    <svg class="w-5 h-5 fill-current mx-2" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                        </path>
                    </svg>
                </a>
        
                
            </div>
        </footer> 
</body>
</html>
