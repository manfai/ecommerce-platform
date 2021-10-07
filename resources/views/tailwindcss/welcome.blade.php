<x-layout>

 <x-hero style="style-2" />

<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
    @foreach(\App\Models\Product::all()->random(4) as $product)
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



<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
<div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
    <div class="mb-4">
      <a href="/" aria-label="Article" class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-4xl">
        Events
      </a>
    </div>
    <p class="text-base text-gray-700 md:text-lg">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
    </p>
  </div>
  <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/" aria-label="Article"><img src="https://images.pexels.com/photos/932638/pexels-photo-932638.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <p class="mb-2 text-xs font-semibold text-gray-600 uppercase">
          13 Jul 2020
        </p>
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5">Diving to the deep</p></a>
        <p class="mb-4 text-gray-700">
          Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
        </p>
        <div class="flex space-x-4">
          <a href="/" aria-label="Likes" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="6 23 1 23 1 12 6 12" fill="none" stroke-miterlimit="10"></polyline>
                <path d="M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z" fill="none" stroke="currentColor" stroke-miterlimit="10"></path>
              </svg>
            </div>
            <p class="font-semibold">7.4K</p>
          </a>
          <a href="/" aria-label="Comments" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="23 5 23 18 19 18 19 22 13 18 12 18" fill="none" stroke-miterlimit="10"></polyline>
                <polygon points="19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
              </svg>
            </div>
            <p class="font-semibold">81</p>
          </a>
        </div>
      </div>
    </div>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/" aria-label="Article"><img src="https://images.pexels.com/photos/1576937/pexels-photo-1576937.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <p class="mb-2 text-xs font-semibold text-gray-600 uppercase">
          4 Nov 2020
        </p>
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5">Conquer the World</p></a>
        <p class="mb-4 text-gray-700">
          Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
        </p>
        <div class="flex space-x-4">
          <a href="/" aria-label="Likes" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="6 23 1 23 1 12 6 12" fill="none" stroke-miterlimit="10"></polyline>
                <path d="M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z" fill="none" stroke="currentColor" stroke-miterlimit="10"></path>
              </svg>
            </div>
            <p class="font-semibold">7.4K</p>
          </a>
          <a href="/" aria-label="Comments" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="23 5 23 18 19 18 19 22 13 18 12 18" fill="none" stroke-miterlimit="10"></polyline>
                <polygon points="19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
              </svg>
            </div>
            <p class="font-semibold">81</p>
          </a>
        </div>
      </div>
    </div>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/" aria-label="Article"><img src="https://images.pexels.com/photos/2123755/pexels-photo-2123755.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <p class="mb-2 text-xs font-semibold text-gray-600 uppercase">
          28 Dec 2020
        </p>
        <a href="/" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5">Explore the beautiful</p></a>
        <p class="mb-4 text-gray-700">
          Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
        </p>
        <div class="flex space-x-4">
          <a href="/" aria-label="Likes" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="6 23 1 23 1 12 6 12" fill="none" stroke-miterlimit="10"></polyline>
                <path d="M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z" fill="none" stroke="currentColor" stroke-miterlimit="10"></path>
              </svg>
            </div>
            <p class="font-semibold">7.4K</p>
          </a>
          <a href="/" aria-label="Comments" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
            <div class="mr-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700"
              >
                <polyline points="23 5 23 18 19 18 19 22 13 18 12 18" fill="none" stroke-miterlimit="10"></polyline>
                <polygon points="19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
              </svg>
            </div>
            <p class="font-semibold">81</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

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

</x-layout>