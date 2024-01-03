<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleProduct.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @include('includes.header')
    <div class="container-fluid">
        <div class="container">
            <a class="text-dark text-decoration-none" href="/">Trang chủ</a>
            <span>/</span>
            <a class="text-dark text-decoration-none" href="#">{{$product->name}}</a>
        </div>

        <div class="container mt-5 ">
            <div class="row gap-2">
                <div class="col ">
                    <img class="product-img border shadow-white zoom_img " width="380px" src="{{asset($product->img_link)}}" alt="">
                </div>
                <div class="col">
                    <div class="mt-4">
                        <h1 class="product-name fa-3x ">{{$product->name }}</h1>
                        <p class="gender-wrap ms-3"> {{$product->sex}}</p>
                        <p class="product-price fa-2x ms-3">{{number_format($product->price, 0, ',', '.')}} ₫</p>

                        <div>
                            <label class="capacity ms-3 ">Dung tích</label>
                            <select class="option-capacity">
                                <option value="">Chọn một tùy chọn</option>
                                <option value="100ml">100ml</option>
                            </select>
                        </div>
                        <div> @if ($product->quantity > 0 && $product->is_visible)
                            <form class="formclick">
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
                            @else
                            <h1 class="mt-2 text-danger">Sản phẩm đã hết hàng</h3>
                            @endif
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

            <div class="row">
                <h2 class="text-center mt-5">Sản phẩm liên quan</h2>
                <div class="d-flex col mb-5 mt-5 ms-5">
                    <div class="d-flex col flex-wrap text-center gap-3 ms-lg-5 product-card">
                        @foreach($sameProducts as $row)
                        <div class="products shadow ">
                            <div class="pro ">
                                <img class="pic" src="{{ asset($row->img_link) }}" alt="" onclick="redirectToProductDetail('{{ $row->id }}')" />
                                <div class="des">
                                    <h5 class="prname" onclick="redirectToProductDetail('{{ $row->id }}')">{{$row->name}}</h5>
                                    <h6 class="sex">Sex: {{$row->sex}}</h6>
                                    <h4 class="mt-2 price">{{ number_format($row->price, 0, ',', '.') }} đ</h4>
                                    <div class="rating">
                                        @for ($i = 5; $i >= 1; $i--)
                                        <input type="radio" id="star-{{ $loop->index }}-{{ $i }}" name="rating-{{ $loop->index }}" value="{{ $i }}">
                                        <label for="star-{{ $loop->index }}-{{ $i }}"></label>
                                        @endfor
                                    </div>
                                    @if ($row->quantity > 0 && $row->is_visible)
                                    <form class="formclick">
                                        @csrf
                                        <button type="submit" class="CartBtn">
                                            <span class="IconContainer">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <input type="hidden" value="{{ $row->id }}" name="id">
                                            <input type="hidden" value="{{ $row->name }}" name="name">
                                            <input type="hidden" value="{{ $row->price }}" name="price">
                                            <input type="hidden" value="{{ $row->img_link }}" name="img_link">
                                            <input type="hidden" value="1" name="quantity">
                                            <p class="text">Add To Cart</p>
                                        </button>
                                    </form>
                                    @else
                                    <p class="text">Sản phẩm đã hết hàng</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>



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
                                        <h5 class="username">{{ $comm->user->name ?? 'Ẩn danh' }}</h5>
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
        var buttons = document.querySelectorAll('.formclick');
        buttons.forEach(function(button) {
            button.addEventListener('submit', function(event) {
                event.preventDefault();
                var productId = button.querySelector('[name="id"]').value;
                var productName = button.querySelector('[name="name"]').value;
                var productPrice = button.querySelector('[name="price"]').value;
                var productQuantity = button.querySelector('[name="quantity"]').value;
                var productImgLink = button.querySelector('[name="img_link"]').value;
                // Gửi yêu cầu Ajax đến server
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

    function redirectToProductDetail(productId) {
        window.location.href = '/product/' + productId;
    }
</script>

</html>
