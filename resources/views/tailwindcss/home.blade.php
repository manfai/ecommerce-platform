@extends('layouts.tailwindcss')

@section('content')

<div class="grid grid-cols-8 gap-8 px-4 pb-16 pt-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">

<aside class="hidden lg:block col-span-2">

<div class="card shadow-sm bg-base-200 text-base-content">
  <figure>
    <img src="https://picsum.photos/id/1005/400/250">
  </figure> 
  <div class="card-body">
    <h2 class="card-title">Accent color</h2> 
    <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p> 
    <div class="card-actions">
      <button class="btn btn-secondary">More info</button>
    </div>
  </div>
</div>

  
</aside>

<section class="col-span-full lg:col-span-6">
    <div class="flex flex-col w-full mb-3 lg:justify-between lg:flex-row md:mb-3">
        <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
            <h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
                <span class="inline-block mb-2">Order History</span>
                <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
            </h2>
        </div>
    </div>
   @livewire('order-list')
</section>

</div>


@endsection