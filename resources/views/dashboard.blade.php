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
    <style>
                    .list-group-item.active {
                        border: 1px solid #dee2e6;
                        background-color: #e6e6e6;
                        color: #000;

                    }
                </style>
</head>

<body>
    @include('includes.header')
    <div class="distance"></div>
    <div class="container-fluid">
        <div style="margin: 5% 8%;">
            <div class="row">
                <ul class="list-group list-group-flush col-3">
                    <li class="list-group-item">
                        <h1 style="margin-top: 100px;">Tài khoản của tôi </h1>
                    </li>
                    <li class="list-group-item{{ Request::is('profile') ? ' active' : '' }}">
                        <a href="/profile" class="text-decoration-none fs-4 text-dark">Trang tài khoản</a>
                    </li>
                    <li class="list-group-item{{ Request::is('profile/order') ? ' active' : '' }}">
                        <a href="/profile/order" class="text-decoration-none fs-4 text-dark">Đơn hàng</a>
                    </li>
                    <li class="list-group-item{{ Request::is('user/profile') ? ' active' : '' }}">
                        <a href="/user/profile" class="text-decoration-none fs-4 text-dark">Tài khoản</a>
                    </li>
                    <li class="list-group-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text" style="all: unset; cursor: pointer ; font-size: 24px;"> Thoát </button>
                        </form>
                    </li>
                </ul>

                <p class="col-8 fs-5 ms-5" style="margin-top: 200px ;">
                    Xin chào <a href="#" class="fs-5 text-decoration-none">{{$name}}</a> (Nếu không phải tài khoản <a href="#" class="fs-5 text-decoration-none"> {{$name}} </a>. Hãy Thoát ra và Đăng nhập vào tài khoản của bạn).
                    Từ trang quản lý tài khoản bạn có thể xem đơn hàng, sửa mật khẩu và thông tin tài khoản. Xin cảm ơn bạn đã mua hàng của chúng tôi!
                </p>
            </div>


        </div>
        @include('includes.footer')
</body>
<!DOCTYPE html>
