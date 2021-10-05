<div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-4 lg:row-gap-8">
    @foreach($products as $product)
    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
        <img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-48 xl:h-48" src="{{ $product->image_url }}" alt="" />
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
<div class="text-center w-full">
    {{$products->links()}}
</div>