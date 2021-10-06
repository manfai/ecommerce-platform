<div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-4 lg:row-gap-8">
    @foreach($products as $product)
    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
        <img class="object-cover w-full h-56 mb-3 rounded shadow-lg md:h-36 xl:h-48" src="{{ $product->image_url }}" alt="" />
    </a>
    @endforeach
    
</div>
<!-- <div class="text-center w-full">
    {{$products->links()}}
</div> -->