<x-layout>
<div class="grid grid-cols-8 gap-8 px-4 pb-16 pt-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">

<aside class="hidden lg:block col-span-2">
    <div class="py-4 mb-6 bg-gray-100 shadow-md rounded-box">
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

    <div class="w-full mb-6 carousel shadow-md rounded-box">
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
</aside>

<section class="col-span-full lg:col-span-6">
    <div class="flex flex-row w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
        <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
            <h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
                <span class="inline-block mb-2">Product List</span>
                <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
            </h2>
        </div>
        <div class="ml-auto flex items-center mb-5 md:mb-6 group md:max-w-xl">
            <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                Wishlist
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                </svg>
            </a>
        </div>
    </div>
    <livewire:product-list />
</section>

</div>


</x-layout>
