@extends('layouts.tailwindcss')

@section('content')

<section class="relative">
  <img src="https://images.pexels.com/photos/3228766/pexels-photo-3228766.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="absolute inset-0 object-cover w-full h-full" alt="" />
  <div class="relative bg-opacity-75 bg-deep-purple-accent-700">
    <svg class="absolute inset-x-0 bottom-0 -mb-0.5 text-white" viewBox="0 0 1160 163">
      <path
        fill="currentColor"
        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
      ></path>
    </svg>
    <div class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="flex flex-col items-center justify-between xl:flex-row">
        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
            The quick, brown fox <br class="hidden md:block" />
            jumps over a lazy dog
          </h2>
          <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
          </p>
          <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
            Learn more
            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
            </svg>
          </a>
        </div>
        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
          @livewire('quick-register')
        </div>
      </div>
    </div>
  </div>
</section>

<section class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">
  <div class="flex flex-col w-full mb-0 lg:justify-between lg:flex-row md:mb-8">
    <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
      <a href="/" aria-label="Item" class="mr-3">
        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50">
          <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
      </a>
      <h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
        <span class="inline-block mb-2">Hot Product List</span>
        <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
      </h2>
    </div>
    <p class="w-full text-gray-700 lg:text-base lg:max-w-md">
      Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem accusantium doloremque rem aperiam, ipsa eaque quae. Sed ut perspiciatis unde omnis iste.
      <br><a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      See more
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
    </p>
    
  </div>
  <div class="grid gap-8 row-gap-5 mb-0 lg:grid-cols-4 lg:row-gap-8">
    @foreach(\App\Models\Product::all()->random(8) as $product)
    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
      <img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-64 xl:h-64" src="{{ $product->image_url }}" alt="" />
      <p class="mb-2 text-xl font-bold leading-none sm:text-2xl">
      {{ $product->title }}
      </p>
      <p class="text-gray-700">
          {{ $product->description }}
      </p>
      <div class="mt-2 mb-4 mr-1 text-lg">${{ $product->price }}</div>
    </a>
    @endforeach
  </div>
</section>

<!-- <section class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
  <div class="flex flex-col bg-white border rounded shadow-sm md:justify-center lg:flex-row">
    <div class="flex flex-col justify-between p-5 border-b sm:p-10 lg:border-b-0 lg:border-r lg:w-1/2">
      <div>
        <p class="mb-2 text-xs font-semibold tracking-wide uppercase">
          New History
        </p>
        <h5 class="max-w-md mb-6 text-3xl font-extrabold leading-none sm:text-4xl">
          The quick, brown fox jumps over a lazy dog
        </h5>
        <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
        </p>
      </div>
      <div class="flex items-center">
        <button
          type="submit"
          class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
        >
          Get started
        </button>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
      <div>
        <p class="mb-2 text-xs font-semibold tracking-wide uppercase">
          New History
        </p>
        <h5 class="max-w-md mb-6 text-3xl font-extrabold leading-none sm:text-4xl">
          The first mate and his Skipper too will do
        </h5>
        <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
          Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
        </p>
      </div>
      <div class="flex items-center">
        <button
          type="submit"
          class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
        >
          Get started
        </button>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
  </div>
</section> -->

<div class="relative flex flex-col-reverse px-4 py-16 mx-auto lg:block lg:flex-col lg:py-32 xl:py-48 md:px-8 sm:max-w-xl md:max-w-full">
  <div class="z-0 flex justify-center h-full -mx-4 overflow-hidden lg:pt-24 lg:pb-16 lg:pr-8 xl:pr-0 lg:w-1/2 lg:absolute lg:justify-end lg:bottom-0 lg:left-0 lg:items-center">
    <img src="https://kitwind.io/assets/kometa/laptop.png" class="object-cover object-right w-full h-auto lg:w-auto lg:h-full" alt="" />
  </div>
  <div class="relative flex justify-end max-w-xl mx-auto xl:pr-32 lg:max-w-screen-xl">
    <div class="mb-16 lg:pr-5 lg:max-w-lg lg:mb-0">
      <div class="max-w-xl mb-6">
        <div>
          <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
            Brand new
          </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          We will bring your<br class="hidden md:block" />
          business
          <span class="inline-block text-deep-purple-accent-400">online</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
        </p>
      </div>
      <form>
        <div class="flex flex-col md:flex-row">
          <input
            placeholder="Name"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
          />
          <input
            placeholder="Email"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="flex items-center mt-4">
          <button
            type="submit"
            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Subscribe
          </button>
          <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection