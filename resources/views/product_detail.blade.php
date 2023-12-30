<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


    <style>
        body {
            margin: 0;
        }

        .breadcrumb-cat {
            background: #FAFAFA;
            padding: 10px 0;
        }

        .option-capacity {
            margin-left: 4px;
            border-radius: 8px;
        }

        .product-price {
            font-size: 22px;
        }

        .gender-wrap {
            font-size: 22px;
        }

        .brand-name {
            font-size: 24px;
        }

        .product-img {
            cursor: zoom-in;
            transition: transform 0.5s ease;
        }

        .nav-item {
            text-decoration: none;
        }

        input[type=checkbox] {
            display: none;
        }

        input[type=checkbox]:checked~label>img {
            transform: scale(1.1);
            cursor: zoom-out;
        }

        .woocommerce-breadcrumb {
            margin: 0 0 20px;
            font-size: .875rem;
            color: #666;
        }


        .woocommerce-breadcrumb a {
            color: #999;
        }

        .container-big {
            background: #fff;
            width: 100%;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        .amount-product {
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 8px;
        }


        .text {
            margin: 0;
            font-size: 15px;
        }

        .date-cmt {
            font-size: 12px
        }

        .capacity {
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 18px;

        }

        .option-capacity {
            margin-left: 4px;
            border-radius: 8px;
        }

        .product-price {
            font-size: 22px;
        }

        .gender-wrap {
            font-size: 22px;
        }

        .brand-name {
            font-size: 24px;
        }

        .product-img {
            cursor: zoom-in;
            transition: transform 0.5s ease;
        }

        .nav-item {
            text-decoration: none;
        }



        .username-input {
            border-radius: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        .comment-container {
            max-height: 400px;
            overflow-y: auto;
        }

        .comment {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .delete-cmt {
            font-size: 10px;
            color: #808080;
        }
    </style>
</head>

<body>
    @include('includes.header')
    <div class="container-big">
        <div class="breadcrumb-cat">
            <div class="container">
                <nav class="woocommerce-breadcrumb">
                    <a class="nav-item" href="/">Trang chủ</a>
                    <span>/</span>
                    <a class="nav-item" href="#">{{$product->name}}</a>
                </nav>
            </div>

        </div>

        <div class="content-area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex">
                            <input type="checkbox" id="zoom_img">
                            <label for="zoom_img">

                                <img class="product-img" width="420px" height="420px" src="{{asset($product->img_link)}}" alt="">
                            </label>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="thanhtoan ">
                            <h1 class="product-name">{{$product->name }}</h1>
                            <p class="gender-wrap"> {{$product->sex}}</p>
                            <p class="product-price">{{$product->price}}₫</p>

                            <div>
                                <label class="capacity " for="">Dung tích</label>
                                <select class="option-capacity">
                                    <option value="">Chọn một tùy chọn</option>
                                    <option value="100ml">100ml</option>
                                </select>
                            </div>
                            <div>
                                <form class="formClick">
                                    <button type="submit" style="display: none;">
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->img_link }}" name="img_link">
                                        <input type="hidden" value="1" name="quantity">
                                        <p class="mt-3">
                                            <button class="btn btn-success">Add To Cart</button>
                                        </p>
                                    </button>
                                </form>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="product-description">
                        <h3 class="text-center">Mô Tả </h3>
                        <p class="mt-4 mb-4">{{$product->content}}</p>
                    </div>
                </div>
                <h2 class="text-center">Comments</h2>

                @if(auth()->check())
                <form action="{{ route('product.comment',  $product->id) }}" method="POST" role="form">
                    @csrf
                    <div class="form-group">

                        <textarea name="comments" class="form-control" placeholder="Comment here..." id="" cols="30" rows="3"></textarea>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </form>
                @else

                <div class="alert alert-danger">
                    <strong>Chưa đăng nhập</strong> <br>
                    Click vào đây để đăng nhập <a href="/login">Đăng nhập</a>
                </div>


                @endif

                @foreach($comments as $comm)
                <div class="container py-4">
                    <div class="row">

                        <div class="card">
                            <div class="card-body">

                                <div class="comment-container" id="comment-container">

                                    <div class="comment">
                                        <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/10/avatar-trang-4.jpg" alt="Avatar" class="avatar">
                                        <div class="comment-details">
                                            <h5 class="username">{{$comm->user->name}}</h5>
                                            <p class="text">{{$comm->comments}}</p>

                                            <p class="date-cmt">{{$comm->created_at->format('d/m/Y')}}</p>
                                            @can('my-comment' , $comm)
                                            <p class="text-right">
                                                <a class="delete-cmt" href="/comment/delete/{{$comm->id}}">Xóa</a>
                                            </p>
                                            @endcan

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

                <div class="container">
                    <h2 class="text-center">Sản phẩm liên quan</h2>
                    <div class="row">



                    </div>
                </div>
                <div id="Letter" class="Letter text-center">
                    <h1>Đăng ký thành viên để nhận khuyến mại</h1>
                    <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
                    <div class="d-flex justify-content-center">
                        <input type="text" placeholder="Nhập Mail" />
                        <a class="mail-btn">Đăng Ký</a>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            </div>

        </div>
        <div class="Follow d-flex justify-content-center">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-telegram"></i>
        </div>

        @include('alert.addToCardSucess')
    </div>
    @include('includes.footer')
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var button = document.querySelector('.formClick');
        console.log(button)
        button.addEventListener('submit', function(event) {
            event.preventDefault();
            console.log('Submit button clicked')
            var productId = button.querySelector('[name="id"]').value;
            var productName = button.querySelector('[name="name"]').value;
            var productPrice = button.querySelector('[name="price"]').value;
            var productQuantity = button.querySelector('[name="quantity"]').value;
            var productImgLink = button.querySelector('[name="img_link"]').value;
            $.ajax({
                type: 'POST',
                url: "{{ route('cart.store') }}",
                data: {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: productQuantity,
                    img_link: productImgLink,
                    _token: '{{ csrf_token() }}',
                },
                success: function showNotification() {
                    var notification = $('#notification');
                    notification.addClass('show');

                    // Hide the notification after 3 seconds (adjust as needed)
                    setTimeout(function() {
                        notification.removeClass('show');
                    }, 5000);
                    updateCartInHeader();
                },
                error: function(error) {
                    console.error(error);
                }
            });

        });
    });

    function updateCartInHeader() {
        $.ajax({
            type: 'GET',
            url: "{{ route('cart.total-quantity') }}",
            success: function(response) {
                $('#cartContainer').text(response.total_quantity);

            },
            error: function(error) {
                console.error(error);
            }
        });
    }
</script>

</html>
