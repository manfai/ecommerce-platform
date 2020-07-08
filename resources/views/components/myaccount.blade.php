<div class="card h-100 border-0 shadow mb-4">
    <div style="background-image: url(/img/photo/photo-1497436072909-60f360e1d4b1.jpg);"
        class="card-header bg-cover text-center py-5 border-0">
        <img src="https://d19m59y37dris4.cloudfront.net/sell/1-2-5/img/photo/kyle-loftus-589739-unsplash-avatar.e60f8a91.jpg"
            alt="Avater" class="d-block avatar avatar-xl mx-auto mb-3 p-2">
        <h5 class="text-uppercase text-white mb-0 pb-0">{{ Auth::user()->name }}</h5>
        <!-- <p class="text-muted text-sm mb-0">山系初哥</p> -->
    </div>
    <div class="card-body pb-0">
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="">
                    <i class="fas fa-user-circle mr-2"></i>我的積分
                </span>
                <span class="badge badge-secondary align-middle px-2">{{Auth::user()->balance}}</span>
            </a>
            <a href="{{ route('address') }}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="">
                    <i class="fas fa-map-signs mr-2"></i>收貨地址
                </span>
                <span class="badge badge-primary align-middle px-2">2</span>
            </a>
            <a href="{{ route('product.favorites') }}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="">
                    <i class="fas fa-directions mr-2"></i>收藏商品
                </span>
                <span class="badge badge-primary align-middle px-2">0</span>
            </a>
            <a href="{{ route('orders') }}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="">
                    <i class="fas fa-shopping-basket mr-2"></i>訂單記錄
                </span>
                <span class="badge badge-primary align-middle px-2">{{count(Auth::user()->orders)}}</span>
            </a>
            <a href="{{ route('address') }}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="">
                    <i class="fas fa-medal mr-2"></i>成就任務
                </span>
                <span class="badge badge-primary align-middle px-2">0</span>
            </a>
            <a class="list-group-item text-left pt-4 pb-0">
                <button class="btn btn-outline-danger btn-block mb-0"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    退出登錄
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </div>
    </div>
</div>
