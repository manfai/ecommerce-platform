@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">主頁</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">我的帳號</a></li>
            <li class="breadcrumb-item active">收貨地址列表</li>
        </ol>
        <div class="d-flex justify-content-between align-items-end mb-5">
            <h1 class="hero-heading mb-0">收貨地址列表</h1><a href="{{ route('address.create') }}"
                class="btn btn-link text-muted">新增收货地址</a>
        </div>
        <div class="card border-0 mb-5">
            <div class="card-body p-0">
                <table class="table table-borderless table-hover table-responsive-md">
                    <thead class="bg-gray-100 py-5">
                        <tr>
                            <th class="py-3">收貨人</th>
                            <th class="py-3">國家</th>
                            <th class="py-3">地址</th>
                            <th class="py-3">郵編</th>
                            <th class="py-3">電話</th>
                            <th class="py-3">動作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addresses as $address)
                        <tr>
                            <td class="align-middle">{{ $address->contact_name }}</td>
                            <td class="align-middle">{{ $address->country }}</td>
                            <td class="align-middle">{{ $address->full_address }}</td>
                            <td class="align-middle">{{ $address->zip }}</td>
                            <td class="align-middle">{{ $address->contact_phone }}</td>
                            <td class="align-middle">
                                <a class="btn btn-primary"
                                    href="{{ route('address.edit', ['addressId' => $address->id]) }}">
                                    修改
                                </a>
                                <button class="btn btn-danger btn-destroy" data-id="{{ $address->id }}">
                                    删除
                                </button>
                                <!-- 
                                    onclick="event.preventDefault();document.getElementById('{{$address->id}}-destroy').submit();"
                                    <form id="{{$address->id}}-destroy" action="{{ route('address.destroy', ['addressId' => $address->id]) }}" class="d-none" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection


@push('scripts')
<script>
    $(document).ready(function () {
        // 删除按钮点击事件
        $('.btn-destroy').click(function () {
            // 获取按钮上 data-id 属性的值，也就是地址 ID
            var id = $(this).data('id');
            // 调用 sweetalert
            Swal.fire({
                title: '确认要删除该地址？',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '确定',
                cancelButtonText: '取消',
            }).then(function (result) { // 用户点击按钮后会触发这个回调函数
                // 调用删除接口，用 id 来拼接出请求的 url
                if (result.value) {
                    Swal.fire({
                        title: 'Please Wait..!',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    axios.delete("/address/" + id)
                        .then(function (data) {
                            Swal.fire({
                                title: '刪除成功',
                                type: 'success',
                                showConfirmButton: false
                            });
                            location.reload();
                        })
                } else if (result.dismiss) {
                    return;
                    // console.log(result.dismiss);
                }
            });
        });
    });

</script>
@endpush
