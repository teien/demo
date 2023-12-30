<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    <div class="distance"></div>
    <div class="container-fluid">
        <div style="margin: 0 8%;">

            <div class="row mt-5">

                <ul class="list-group list-group-flush col-3">
                <li class="list-group-item"> <h1 style="margin-top: 100px;">Tài khoản của tôi </h1> </l1>
                    <li class="list-group-item"><a href="/profile" class="text-decoration-none fs-4 text-dark">Trang tài khoản</a></li>
                    <li class="list-group-item"><a href="/profile/order" class="text-decoration-none fs-4 text-dark">Đơn hàng</a></li>

                    <li class="list-group-item"><a href="/user/profile" class="text-decoration-none fs-4 text-dark">Tài khoản</a></li>
                    <li class="list-group-item"><a class="text-decoration-none fs-4 text-dark">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="all: unset; cursor: pointer;"> Thoát</button>
                            </form>
                        </a></li>
                </ul>

                <div class="col fs-5 mt-5">
                    @foreach ($order_id as $orderId)
                    <div class="border mb-3">
                        @foreach ($orderDetails as $item2)
                        @if ($orderId == $item2->order_id)
                        <div class="row mb-2 align-items-center text-center border-bottom update-input">
                            <div class="col-lg-5">
                                <div class="me-lg-5">
                                    <div class="d-flex align-items-center text-center">
                                        <img src="{{ asset($item2->products->img_link) }}" width="50" alt="Thumbnail" loading="lazy" />
                                        <div class="">
                                            <a href="#" class="nav-link font-mono text-success">{{ $item2->products->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                <div class="flex flex-row me-5">
                                    <span class="m-4 me-5">{{ $item2->quantity }}</span>
                                    <text class=" text-nowrap item-price ms-5">{{ number_format($item2->price, 0, ',', '.') }}đ / per item</text>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                <div class="float-md-end">
                                    <text class="h6">{{ number_format($item2->quantity * $item2->price, 0, ',', '.') }}đ</text>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="row mb-3">
                            <div class="col-md-6 text-start">
                                <h5 id="totalPrice" class="d-inline">Total price: {{ number_format($item2->Orders->amount) }} đ</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <time class="text-muted d-inline">Order date: {{ $item2->Orders->created_at }}</time>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="Letter" class="Letter text-center mb-5">
                    <h1>Đăng ký thành viên để nhận khuyến mại</h1>
                    <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
                    <div class="d-flex justify-content-center">
                        <input type="text" placeholder="nhập mail" />
                        <a class="mail-btn">Đăng kí</a>
                    </div>
                </div>
            </div>

        </div>
        @include('includes.footer')
</body>
<!DOCTYPE html>
