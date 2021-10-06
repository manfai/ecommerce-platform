<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex w-full mb-6 justify-between flex-row md:mb-8">
    <div class="flex items-center mb-5 md:mb-6 group md:max-w-xl">
      <h2 class="font-sans text-xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl">
        <span class="inline-block mb-2">Related Product</span>
        <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
      </h2>
    </div>
    <div class="ml-auto flex items-center mb-5 md:mb-6 group md:max-w-xl">
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                See more
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
            </a>
        </div>
  </div>
  <div class="grid gap-4 row-gap-5 mb-8 grid-cols-2 lg:grid-cols-5 lg:row-gap-8">
    @foreach(\App\Models\Product::all()->random(5) as $product)
      <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}" aria-label="View Item">
        <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
          <img class="object-cover w-full h-56 md:h-48 xl:h-56" src="{{ $product->image_url }}" alt="" />
          <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75">
            <p class="text-sm font-medium tracking-wide text-white">
            {{ $product->title }}
            </p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</section>