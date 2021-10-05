<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.2/dist/full.css" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>
<body class="bg-base-100">
       
    @if(!\Request::is('*/login') && !\Request::is('*/register')) 
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="relative flex items-center justify-between">
        <div class="flex items-center">
        <a href="/" aria-label="Company" title="Company" class="inline-flex items-center mr-8">
            <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
            <rect x="3" y="1" width="7" height="12"></rect>
            <rect x="3" y="17" width="7" height="6"></rect>
            <rect x="14" y="1" width="7" height="6"></rect>
            <rect x="14" y="11" width="7" height="12"></rect>
            </svg>
            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
        </a>
        <ul class="flex items-center hidden space-x-8 lg:flex">
            <li><a href="/product" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Products</a></li>
            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Events</a></li>
            <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">News</a></li>
            <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
        </ul>
        </div>
        <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="{{route('login')}}" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
        <li>
            <a
            href="{{route('register')}}"
            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
            aria-label="Sign up"
            title="Sign up"
            >
            Sign up
            </a>
        </li>
        </ul>
        <!-- Mobile menu -->
        <div class="lg:hidden">
        <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
            </svg>
        </button>
        <!-- Mobile menu dropdown 
        <div class="absolute top-0 left-0 w-full">
            <div class="p-5 bg-white border rounded shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                </a>
                </div>
                <div>
                <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path
                        fill="currentColor"
                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                    ></path>
                    </svg>
                </button>
                </div>
            </div>
            <nav>
                <ul class="space-y-4">
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                <li>
                    <a
                    href="/"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                    aria-label="Sign up"
                    title="Sign up"
                    >
                    Sign up
                    </a>
                </li>
                </ul>
            </nav>
            </div>
        </div>
        -->
        </div>
    </div>
    </div>
    @endif

    <!-- ==== Page Content ==== -->
    @yield('content')


    @if(!\Request::is('*/login') && !\Request::is('*/register')) 
    <div class="bg-gray-900">
  <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
        <div>
            <p class="font-medium tracking-wide text-gray-300">Category</p>
            <ul class="mt-2 space-y-2">
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Products 1</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Products 2</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Products 3</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Products 4</a>
            </li>
            </ul>
        </div>
        <div>
            <p class="font-medium tracking-wide text-gray-300">Pages</p>
            <ul class="mt-2 space-y-2">
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Your Cart</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Events</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">News</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">About us</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Contact us</a>
            </li>
            </ul>
        </div>
        <div>
            
            <p class="font-medium tracking-wide text-gray-300">Customers</p>
            <ul class="mt-2 space-y-2">
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">FAQs</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms & Conditions</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy Policy</a>
            </li>
            <li>
                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Cookie policy</a>
            </li>
            </ul>
        </div>
      </div>
      <div class="md:max-w-md lg:col-span-2">
        <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
        <form class="flex flex-col mt-4 md:flex-row">
          <input
            placeholder="Email"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
          />
          <button
            type="submit"
            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Subscribe
          </button>
        </form>
        <p class="mt-4 text-sm text-gray-500">
          Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
        </p>
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
      <p class="text-sm text-gray-500">
        © Copyright 2020 Lorem Inc. All rights reserved.
      </p>

      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
            <svg class="h-6 stroke-current fill-current text-base-100" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 26.7117 4.53967 29.2974 5.51747 31.6554C6.02232 32.8729 6.64396 34.0297 7.36843 35.1119C7.61157 35.4751 7.15543 37.7711 6 42C10.2289 40.8446 12.5249 40.3884 12.8881 40.6316C13.9703 41.356 15.1271 41.9777 16.3446 42.4825C18.7026 43.4603 21.2883 44 24 44Z" fill="none" stroke="" stroke-width="4" stroke-linejoin="round" />    <path d="M19.4401 14C19.8845 14 20.2939 14.241 20.5096 14.6295L22.006 17.3249C22.2019 17.6778 22.2111 18.1047 22.0305 18.4658L21 21C21 21 21.2517 23.2517 23 25C24.7484 26.7483 27 27 27 27L29.5266 25.9625C29.8879 25.7818 30.315 25.7911 30.6681 25.9874L33.3711 27.4902C33.7593 27.7061 34 28.1153 34 28.5594V31.6625C34 33.2428 32.5321 34.3842 31.0348 33.8789C27.9595 32.8413 23.1858 30.8656 20.1601 27.8398C17.1345 24.8142 15.1587 20.0405 14.121 16.9652C13.6158 15.4679 14.7572 14 16.3375 14H19.4401Z" stroke-width="0" stroke-linejoin="round" /></svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
        <svg class="h-6 stroke-current text-base-100" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36 12.5997H31.2489H29.9871C28.9009 12.5997 28.0203 13.4803 28.0203 14.5666V21.4674H36L34.8313 29.0643H28.0203V43H19.2451V29.0643H12V21.4674H19.1515L19.2451 14.2563L19.2318 12.9471C19.1879 8.60218 22.6745 5.04434 27.0194 5.0004C27.0459 5.00013 27.0724 5 27.0989 5H36V12.5997Z" fill="none" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
         <svg class="h-6 stroke-current text-base-100" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M34 6H14C9.58172 6 6 9.58172 6 14V34C6 38.4183 9.58172 42 14 42H34C38.4183 42 42 38.4183 42 34V14C42 9.58172 38.4183 6 34 6Z" fill="none" stroke="" stroke-width="4" stroke-linejoin="round"/><path d="M24 32C28.4183 32 32 28.4183 32 24C32 19.5817 28.4183 16 24 16C19.5817 16 16 19.5817 16 24C16 28.4183 19.5817 32 24 32Z" fill="none" stroke="" stroke-width="4" stroke-linejoin="round"/><path d="M35 15C36.1046 15 37 14.1046 37 13C37 11.8954 36.1046 11 35 11C33.8954 11 33 11.8954 33 13C33 14.1046 33.8954 15 35 15Z" fill=""/></svg>
        </a>
      </div>
    </div>
  </div>
</div>
    
    @endif
@stack('scripts')

@livewireScripts
</body>
</html>