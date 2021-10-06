@extends('layouts.tailwindcss')

@section('content')
<!-- <section class="px-4 pb-16 mx-auto pt-10 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">


    <div class="flex flex-wrap md:-m-2 -m-1">
        <div class="flex flex-wrap w-1/2">
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
            </div>
            <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
            </div>
        </div>
        <div class="flex flex-wrap w-1/2">
            <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
            </div>
            <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
            </div>
        </div>
    </div>
</section> -->

<div class="relative px-4 pt-10 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">

<div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">

<h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
    <span class="inline-block mb-2">Event List</span>
    <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
</h2>
<p class="text-gray-700 lg:text-md lg:max-w-lg hidden">
    "Class is dead", says Foucault; however, according to Reicher, it is not so much class that is dead, but rather the absurdity, and some would say the paradigm, of class. However, the subject is interpolated into a postpatriarchialist
    dialectic theory that includes consciousness as a totality.
</p>
</div>
  <div class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
    <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-indigo-100">
      <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
      <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
      <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
      <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
      <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
    </svg>
  </div>
  <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Football Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Bowling Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Cycling Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Weight Lifting Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          Meanwhile, in behind the bicycle shed, Hercules Morse, as big as a horse.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Golf Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Hockey Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          A business big enough that it could be listed on the NASDAQ goes belly up.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Shooting Sports</p>
        <p class="text-sm leading-5 text-gray-900">
          Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down clap of thunder.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
      <div class="p-5">
        <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
          <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <p class="mb-2 font-bold">Martial Arts</p>
        <p class="text-sm leading-5 text-gray-900">
          Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster.
        </p>
         <div class="grid gap-3 mt-4">
            <!-- <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Coupon</span> 
              <progress max="100" class="progress progress-secondary" value="70"></progress>
            </div> -->
            <div class="flex items-center p-1">
              <span class="w-20 text-xs text-base-content text-opacity-60">Users</span> 
                <div class="-space-x-3 w-full avatar-group">
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-1@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-2@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-3@40w.png">
                    </div>
                  </div> 
                  <div class="avatar" style="border-width:1px">
                    <div class="w-8 h-8">
                      <img src="http://daisyui.com/tailwind-css-component-profile-5@40w.png">
                    </div>
                  </div> 
                  <div class="avatar placeholder" style="border-width:1px">
                    <div class="w-8 h-8 text-xs rounded-full bg-neutral-focus text-neutral-content">
                      <span>+99</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
  </div>
</div>
@endsection