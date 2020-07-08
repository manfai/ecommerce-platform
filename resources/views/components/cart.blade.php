<div class="card border-0 shadow">
    <div class="card-header bg-gray-100 py-4 border-0">
        <div class="media align-items-center">
        <div class="media-body">
            <p class="subtitle text-sm text-primary">購物車</p>
            <h4 class="mb-0">結帳小計</h4>
        </div>
        <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted">
            <use xlink:href="#retail-bag-1"> </use>
        </svg>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="text-block pb-3">
            <ul class="list-unstyled mb-0">
                @if(isset($order))
                <li class="mb-3"><i class="fas fa-box fa-fw text-muted mr-2"></i>{{count($order->items)}} 件商品</li>
                @else
                <li class="mb-3"><i class="fas fa-box fa-fw text-muted mr-2"></i>{{count($cartItems)}} 件商品</li>
                @endif
                @isset($address)
                <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw text-muted mr-2"></i><span id="addr_text">{{ $address->full_address }}</span></li>
                @endisset
            </ul>
        </div>
        <div class="text-block pt-3 pb-0">
            <table class="w-100">
                <tbody>
                    @php 
                        $total = 0; 
                        $cartItems = isset($cartItems)?$cartItems:$order->items;
                    @endphp
                    @foreach($cartItems as $item)
                        @php $total += !empty($item)?$item->productSku->price:0; @endphp
                    @endforeach
                    <tr>
                        <th class="font-weight-normal py-2">商品總額</th>
                        <td class="text-right py-2">${{number_format($total,2,'.', '')}}</td>
                    </tr>
                    <tr>
                        <th class="font-weight-normal py-2">運費</th>
                        <td class="text-right py-2">$0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="border-top">
                        <th class="pt-3">帳單總額</th>
                        <td class="font-weight-bold text-right pt-3">
                            ${{number_format($total,2,'.', '')}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="card-footer bg-primary-light py-4 border-0">
        <div class="media align-items-center">
            <div class="media-body">
                <h6 class="text-primary">免費送貨服務</h6>
                <p class="text-sm text-primary opacity-8 mb-0">額外選購多 $ 305.50 貨品即享免費送貨服務，否則收取 $ 80.00 運費。
                    <a href="#" class="text-reset ml-3">More details</a></p>
            </div>
            <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-2 text-primary">
                <use xlink:href="#pay-1"> </use>
            </svg>
        </div>
    </div>
</div>