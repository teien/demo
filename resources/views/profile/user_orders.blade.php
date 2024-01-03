<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<style>
                    .list-group-item.active {
                        border: 1px solid #dee2e6;
                        background-color: #e6e6e6;
                        color: #000;

                    }
                </style>
<body>
    @include('includes.header')
    <div class="distance"></div>
    <div class="container-fluid">
        <div style="margin: 0 8%;">
            <div class="row">

                <ul class="list-group list-group-flush col-3 mt-5">
                    <li class="list-group-item">
                        <h1 style="margin-top: 100px;">Tài khoản của tôi </h1>
                    </li>
                    <li class="list-group-item{{ Request::is('profile') ? ' active' : '' }}">
                        <a href="/profile" class="text-decoration-none fs-4 text-dark">Trang tài khoản</a>
                    </li>
                    <li class="list-group-item{{ Request::is('profile/order') ? ' active' : '' }}">
                        <a href="/profile/order" class="text-decoration-none fs-4 text-dark">Đơn hàng</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/user/profile" class="text-decoration-none fs-4 text-dark">Tài khoản</a>
                    </li>
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text" style="all: unset; cursor: pointer ; font-size: 24px;"> Thoát </button>
                        </form>
                    </li>
                </ul>

                <div class="col fs-5 mt-5">
                    @foreach ($order_id as $orderId)
                    <div class="border mb-3">
                        @foreach ($orderDetails as $item2)
                        @if ($orderId == $item2->order_id)
                        <p class="d-none" >{{$item = $item2}}</p>
                        <div class="row mb-2 align-items-center text-center  update-input border-bottom">
                            <div class="col-lg-5 ">
                                <div class="me-lg-5">
                                    <div class="d-flex align-items-center text-center">
                                        <img src="{{ asset($item2->product->img_link) }}" width="50" alt="Thumbnail" loading="lazy" onclick="redirectToProductDetail('{{ $item2->product->id }}')"/>
                                        <div class="">
                                            <a href="#" class="nav-link font-mono text-success" onclick="redirectToProductDetail('{{ $item2->product->id }}')">{{ $item2->product->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                <div class="flex flex-row me-5">
                                    <span class="m-4 me-5">{{ $item2->quantity }}</span>
                                    <text class=" text-nowrap item-price ms-5" style="font-size: 20px;">{{ number_format($item2->price, 0, ',', '.') }}đ / per item</text>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                <div class="float-md-end me-1">
                                    <text class="h6 " style="font-size: 20px;">{{ number_format($item2->quantity * $item2->price, 0, ',', '.') }}đ</text>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="row mb-3">
                           @if(isset($item))
                           <div class="col text-start ms-1">
                                <h5 id="totalPrice" class="d-inline">Total price: {{ number_format($item->Order->amount) }} đ</h5>
                                <h5>Mã ĐH:{{ $item->Order->id }} </h5>
                            </div>
                            <div class="col">
                                <h5 id="totalPrice" class="d-inline">
                                    Tình trạng đơn hàng:
                                    @if ($item->Order->status == 1)
                                        Đặt hàng thành công - Đang giao hàng
                                    @elseif ($item->Order->status == 0)
                                        Đặt hàng thất bại
                                    @elseif ($item->Order->status == 2)
                                        Đã giao hàng
                                    @else
                                        Trạng thái không xác định
                                    @endif
                                </h5>

                                <form action="{{ route('order.finish', ['orderId' => $item->Order->id]) }}" method="POST">
                                    @csrf
                                    @if ($item->Order->status == 1)
                                    <button type="submit" class="btn btn-success">Đã nhận được hàng</button>
                                    @endif

                                </form>
                            </div>
                            <div class="col text-end">
                                <time class="text-muted d-inline ">Order date: {{ $item->Order->created_at }}</time>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
</body>
<script>
    function redirectToProductDetail(productId) {
        window.location.href = '/product/' + productId;
    }
</script>
</html>
