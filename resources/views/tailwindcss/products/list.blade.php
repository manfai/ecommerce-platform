@extends('layouts.tailwindcss')

@section('content')

<div class="grid grid-cols-8 gap-8 px-4 pb-16 pt-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">

<aside class="hidden lg:block col-span-2">

<div class="w-full mb-6 carousel rounded-box">
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/500/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/501/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/502/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/503/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/504/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/505/256/144" class="w-full">
  </div> 
  <div class="w-full carousel-item">
    <img src="https://picsum.photos/id/506/256/144" class="w-full">
  </div>
</div>


    <div class="py-4 bg-gray-100 shadow-md rounded-box">
        <ul class="menu py-4">
            <li class="menu-title">
                <span>
                    Menu Title
                </span>
            </li>
            <li class="bordered">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Category 1
                </a>
            </li>
            <li class="bordered">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Category 2
                </a>
            </li>
            <li class="hover-bordered">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Category 3
                </a>
            </li>
        </ul>
    </div>
</aside>

<section class="col-span-full lg:col-span-6">
    <div class="flex flex-col w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
        <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
            <h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
                <span class="inline-block mb-2">Product List</span>
                <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
            </h2>
        </div>
    </div>
   @livewire('product-list')
</section>

</div>


@endsection