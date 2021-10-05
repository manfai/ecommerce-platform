<div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-5 lg:row-gap-8">
    @foreach($orders as $order)
    <a href="{{ route('product.show',['productId'=>$order->id,'productTitle'=>$order->title]) }}">
        <img class="object-cover w-full h-56 mb-3 rounded shadow-lg md:h-36 xl:h-36" src="{{ $order->image_url }}" alt="" />
        <p class="text-md font-bold leading-none sm:text-base">
            #{{ $order->id.date('YmdHis') }}
        </p>
        <p class="mb-2 badge badge-primary badge-sm uppercase">
           Piad
        </p>
        <div class="mb-4 mr-1 text-sm">${{ $order->price }}</div>
    </a>
    @endforeach
    
</div>
<div class="text-center w-full">
    {{$orders->links()}}
</div>