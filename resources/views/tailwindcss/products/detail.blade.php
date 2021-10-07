<x-layout>
<!-- <div class="relative bg-deep-purple-accent-400">
  <div class="absolute inset-x-0 bottom-0">
    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
      <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
    </svg>
  </div>
  <div class="px-4 pt-12 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
    <div class="relative sm:text-left">
      <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
        The quick, brown fox<br class="hidden md:block" />
        jumps over a
        <span class="relative inline-block px-2">
          <div class="absolute inset-0 transform -skew-x-12 bg-teal-accent-400"></div>
          <span class="relative text-teal-900">Product Detail</span>
        </span>
      </h2>
      <nav class="mb-6 bg-grey-light rounded font-sans w-full">
  <ol class="list-reset flex text-white">
    <li><a href="#" class="font-bold">Home</a></li>
    <li><span class="mx-2">></span></li>
    <li><a href="#" class="font-bold">Library</a></li>
    <li><span class="mx-2">></span></li>
    <li>Data</li>
  </ol>
</nav>

    </div>
  </div>
</div> -->
<section class="px-4 pb-16 mx-auto pt-10 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
    
  <div class="">
  <div class="flex flex-col w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
  <div class="max-w-xl mb-6">
        <h2 class="font-sans text-xl font-black leading-none tracking-tight text-gray-900 sm:text-2xl">
            <span class="inline-block mb-2">Product Detail</span>
            <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
        </h2>
        <!-- <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
          Product Detail
          <span class="inline-block text-deep-purple-accent-400">{{$product->title}}</span>
        </h2> -->
        <!-- <p class="text-base text-gray-700 md:text-lg">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
        </p> -->
      </div>
    </div>
    @livewire('product-detail', ['product'=>$product])
</section>

<livewire:related-product />

@push('scripts')
<script>
    // $(document).ready(function () {
    //     checkStock();

    //     $('#skus').on('change', function () {
    //         var title = $(this).find(':selected').text();
    //         var description = $(this).find(':selected').data('description');
    //         $('#sku-title').text(title);
    //         $('#sku-description').text(description);
    //         checkStock();
    //     });

    //     $('#qty').on('change', function () {
    //         checkStock();
    //     });

    //     // 監聽收藏按鈕的點擊事件
    //     $('.btn-favor').click(function () {
    //         Swal.fire({
    //             title: 'Please Wait..!',
    //             allowOutsideClick: false,
    //             allowEscapeKey: false,
    //             allowEnterKey: false,
    //             onOpen: () => {
    //                 swal.showLoading()
    //             }
    //         })
    //         // 發起一個 post ajax 請求，請求 url 通過後端的 route() 函數生成。
    //         axios.post("{{ route('product.favor', ['productId' => $product->id]) }}")
    //             .then(function () { // 請求成功會執行這個回調
    //                 Swal.fire({
    //                     title: '操作成功',
    //                     type: 'success',
    //                     showConfirmButton: false,
    //                 });
    //             }, function (error) { // 請求失敗會執行這個回調
    //                 // 如果返回碼是 401 代表沒登錄
    //                 if (error.response && error.response.status === 401) {
    //                     Swal.fire({
    //                         title: '請先登錄',
    //                         type: 'error',
    //                         showConfirmButton: false,
    //                     });
    //                 } else if (error.response && (error.response.data.msg || error.response.data
    //                         .message)) {
    //                     // 其他有 msg 或者 message 字段的情況，將 msg 提示給用户
    //                     Swal.fire({
    //                         title: error.response.data.msg ? error.response.data.msg : error
    //                             .response.data.message,
    //                         type: 'error',
    //                     });
    //                 } else {
    //                     // 其他情況應該是系統掛了
    //                     Swal.fire({
    //                         title: '系統錯誤',
    //                         type: 'error',
    //                         showConfirmButton: false,
    //                     });
    //                 }
    //             });
    //     });

    //     $('.btn-disfavor').click(function () {
    //         Swal.fire({
    //             title: 'Please Wait..!',
    //             allowOutsideClick: false,
    //             allowEscapeKey: false,
    //             allowEnterKey: false,
    //             onOpen: () => {
    //                 swal.showLoading()
    //             }
    //         })
    //         axios.delete("{{ route('product.disfavor', ['productId' => $product->id]) }}")
    //             .then(function () {
    //                 Swal.fire({
    //                     title: '操作成功',
    //                     type: 'success',
    //                     showConfirmButton: false,
    //                 }).then(function () {
    //                     location.reload();
    //                 });
    //             });
    //     });
    // });

    // function checkStock() {
    //     var stock = $('#skus').find(':selected').data('stock');
    //     var id = $('#skus').find(':selected').val();
    //     var qty = $('#qty').val();
    //     $('input[name=sku_id]').val(id);
    //     $('input[name=qty]').val(qty);
    //     $('#sku-stock span').text(stock);
    //     if (stock <= 0) {
    //         $('.btn-add-to-cart').attr('disabled', 'disabled');
    //     } else {
    //         $('.btn-add-to-cart').removeAttr('disabled');
    //     }
    // }
</script>
@endpush

</x-layout>