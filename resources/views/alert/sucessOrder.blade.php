<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Thông Báo Đơn Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        .notification {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .order-details {
            text-align: left;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="notification">
        <h2>Đơn Hàng Đã Đặt Thành Công!</h2>
        <p>Cảm ơn bạn đã đặt hàng. Dưới đây là chi tiết đơn hàng của bạn:</p>
    </div>

    <div class="order-details mt-5">
        <h3>Thông Tin Đơn Hàng</h3>
        <p><strong>Số Đơn Hàng:</strong> #DH{{$order->id}}</p>
        <p ><strong >Sản Phẩm: </strong><br />
        <span>Nước hoa: </span>
            @foreach ($orderDetails as $detail)

            <span> {{$detail->product->name}} x {{$detail->quantity}},</span>
            @endforeach</p>
        <p><strong>Tổng Tiền: {{number_format($order->amount,0,',', '.')}} đ</strong> </p>

        <p><strong>Địa Chỉ Giao Hàng:</strong> {{$order->address}}.</p>
        <p class="text-center fs-3"><a class="text-decoration-none" href="/home">Trở về trang chủ</a></p>
    </div>

    <p>Xin vui lòng kiểm tra email của bạn để xem thêm chi tiết và theo dõi đơn hàng.</p>

    <p>Cảm ơn bạn đã mua sắm tại cửa hàng chúng tôi!</p>
</body>

</html>
