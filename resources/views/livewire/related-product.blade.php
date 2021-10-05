<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
    <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
      <h2 class="font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl">
        <span class="inline-block mb-2">Related Product</span>
        <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
      </h2>
    </div>
    <div class="ml-auto flex items-center mb-5 md:mb-6 group lg:max-w-xl">
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                See more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
            </a>
        </div>
  </div>
  <div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-4 lg:row-gap-8">
    @foreach(\App\Models\Product::all()->random(4) as $product)
        <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
            <img class="object-cover object-top w-full h-56 mb-6 rounded shadow-lg md:h-48 xl:h-48" src="{{ $product->image_url }}" alt="" />
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