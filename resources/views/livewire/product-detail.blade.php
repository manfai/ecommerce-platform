<div class="flex flex-wrap">
      <div class="lg:w-1/2 w-full">
      <img alt="ecommerce" class="w-full lg:h-auto lg:max-h-96 h-48 object-cover object-center rounded" src="{{$product->image_url}}">

      <div class="w-full py-4 space-x-4 carousel carousel-center">
        <div class="carousel-item">
          <img src="https://picsum.photos/id/500/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/501/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/502/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/503/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/504/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/505/256/144" class="rounded">
        </div> 
        <div class="carousel-item">
          <img src="https://picsum.photos/id/506/256/144" class="rounded">
        </div>
      </div>

      </div>


      <div class="lg:w-1/2 w-full lg:pl-10 lg:pb-6 mt-6 lg:mt-0">
      <h1 class="text-gray-900 text-4xl title-font font-bold mb-1">{{$product->title}}</h1>
      <h2 class="text-sm title-font text-gray-500 tracking-widest">By BRAND</h2>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <svg class="w-5 h-5 text-primary fill-current stroke-current" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M23.9986 5L17.8856 17.4776L4 19.4911L14.0589 29.3251L11.6544 43L23.9986 36.4192L36.3454 43L33.9586 29.3251L44 19.4911L30.1913 17.4776L23.9986 5Z" fill="none" stroke="" stroke-width="4" stroke-linejoin="round"/></svg>
            <span class="text-gray-600 ml-3">{{ $product->review_count }} Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
          {{ $product->sold_count }} Sold
          </span>
        </div>
        <p class="leading-relaxed">
        {!! $product->description !!}
        </p>
        <div class="my-6 border-gray-200 py-2">
          <div class="text-gray-500 mb-4">Color</div>
          <div class="">
            <button class="ml-1 bg-gray-700 rounded-full w-8 h-8 focus:outline-none"></button>
            <button class="ml-1 bg-red-700 rounded-full w-8 h-8 focus:outline-none"></button>
            <button class="ml-1 bg-pink-300 rounded-full w-8 h-8 focus:outline-none"></button>
            <button class="ml-1 bg-indigo-500 rounded-full w-8 h-8 focus:outline-none"></button>
          </div>
        </div>
        <div class="mb-6 border-gray-200">
          <div class="text-gray-500 mb-4">Quantity</div>
          <!-- <span class="ml-auto text-gray-900">4</span> -->
            <div class="relative w-32">
              <select class="w-full py-3 px-4 text-sm text-center rounded-md border appearance-none border-gray-900 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 pl-3 pr-10">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
        </div>
        <div class="mb-6 border-gray-200 py-2">
      
          <div class="text-gray-500 mb-4">Size</div>
          <!-- <span class="ml-auto text-gray-900">Medium</span> -->
          <div class="relative">
          <div class="grid grid-cols-4 gap-4">
                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                        <p id="size-choice-0-label">
                          XXS
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                        <p id="size-choice-1-label">
                          XS
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                        <p id="size-choice-2-label">
                          S
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                        <p id="size-choice-3-label">
                          M
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                        <p id="size-choice-4-label">
                          L
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                        <p id="size-choice-5-label">
                          XL
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-6-label">
                        <p id="size-choice-6-label">
                          XXL
                        </p>

                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                      </label>

                      <!-- Active: "ring-2 ring-indigo-500" -->
                      <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-gray-50 text-gray-200 cursor-not-allowed">
                        <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only" aria-labelledby="size-choice-7-label">
                        <p id="size-choice-7-label">
                          XXXL
                        </p>

                        <div aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                          <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                            <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                          </svg>
                        </div>
                      </label>
                    </div>
              <!-- <select class="w-20 text-sm rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 pl-3 pr-10">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span> -->
            </div>
        </div>
        <div class="flex">
          <span class="title-font font-bold text-4xl text-gray-900">$58.00</span>
        <form class="ml-auto" action="{{route('cart.add')}}" method="post">
            @csrf
            <input type="hidden" name="sku_id" value="5">
            <input type="hidden" name="qty" value="1">
            <button type="submit" 
            class="flex ml-auto inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
            >Add To Cart</button>
        </form>

        @if(!$favored)

        <button wire:click="favor()" class="rounded bg-gray-200 px-4 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg class="w-5 h-5 fill-current stroke-current" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 8C8.92487 8 4 12.9249 4 19C4 30 17 40 24 42.3262C31 40 44 30 44 19C44 12.9249 39.0751 8 33 8C29.2797 8 25.9907 9.8469 24 12.6738C22.0093 9.8469 18.7203 8 15 8Z" fill="none" stroke="" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        @else
        <button wire:click="disfavor()" class="rounded bg-gray-200 px-4 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg class="w-5 h-5 fill-current stroke-current"  viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44 19C44 12.9249 39.0751 8 33 8C29.2797 8 25.9907 9.8469 24 12.6738C22.0093 9.8469 18.7203 8 15 8C8.92487 8 4 12.9249 4 19C4 30 17 40 24 42.3262C25.1936 41.9295 26.5616 41.3098 28.0099 40.5" stroke="" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.9589 27L41.8373 35.5" stroke="" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M41.8373 27L34.9589 35.5" stroke="" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        @endif
        
        </div>
      </div>
    </div>