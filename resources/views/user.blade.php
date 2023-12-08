<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    <div class="distance"></div>
    <div class="container">
        <h1>Tài khoản của tôi</h1>
        <div class="row">
            <ul class="list-group list-group-flush col-3">
                <li class="list-group-item"><a href="" class="text-decoration-none fs-4 text-dark">Trang tài khoản</a></li>
                <li class="list-group-item"><a href="/user/donhang" class="text-decoration-none fs-4 text-dark">Đơn hàng</a></li>
                <li class="list-group-item"><a href="/user/dowload" class="text-decoration-none fs-4 text-dark">Tải xuống</a></li>
                <li class="list-group-item"><a href="/user/diachi" class="text-decoration-none fs-4 text-dark">Địa chỉ</a></li>
                <li class="list-group-item"><a href="/user/profile" class="text-decoration-none fs-4 text-dark">Tài khoản</a></li>
                <li class="list-group-item"><a class="text-decoration-none fs-4 text-dark">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" style="all: unset; cursor: pointer;" > Thoát</button>
                        </form>
                    </a></li>
            </ul>
            <div class="col-1" style="border-left:solid 4px #f0f0f0 ; height: 380px;"></div>
            <p class="col-8 fs-5 mt-5">
                Xin chào <a href="#"class="fs-5 text-decoration-none">{{$name}}</a> (Nếu không phải tài khoản <a href="#"class="fs-5 text-decoration-none"> {{$name}} </a>. Hãy Thoát ra và Đăng nhập vào tài khoản của bạn).
                Từ trang quản lý tài khoản bạn có thể xem đơn hàng mới, quản lý địa chỉ giao hàng và thanh toán, and sửa mật khẩu và thông tin tài khoản.
            </p>
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
</body>
<!DOCTYPE html>
