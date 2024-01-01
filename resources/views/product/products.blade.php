<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleProduct.css') }}">

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
    <div class="container mb-5" style="max-width: 1800px;">
        <div class="d-flex justify-content-center m-5">
            <h1>Shop</h1>
        </div>
        <div class="">
            <p class="" style="
                                color: #565656;
                                font-size: 15px;
                                background-color: #fafafa;
                                padding: 10px;
                                margin-bottom: 50px;
                              ">
                <a style="text-decoration: none; color: #565656" href="/home">Trang chủ</a> /
                <a style="text-decoration: none; color: #565656">Shop</a>
            </p>
        </div>

        <div class="d-flex ms-lg-5 ms-sm-1">
            <div class="col-2">
                <div class="sidebar">
                    <div class="ms-lg-3 ms-sm-1">
                        <h3>
                            Thương hiệu
                        </h3>
                        <br>
                        <div>
                            <form action="{{ route('search') }}" class="search" method="GET">
                                <input style="border-top: none;
                                                border-left: none;
                                                border-right: none;
                                                border-bottom: 1px solid #b1b1b1;
                                                outline: none;
                                                " class="ipsearch" type="text" name="search" placeholder="Bạn cần tìm ..." title="Type in a name">
                                <button class="btsearch" type="submit">Tìm kiếm</button>
                            </form>
                            <div class="list-cat">
                                <table id="">
                                    <tbody>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 1]) }}" class="">Creed</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 2]) }}" class="">Tom Ford</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 3]) }}" class="">Dior</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 4]) }}" class="">By Kilian</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 5]) }}" class="">Hermès</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 6]) }}" class="">Versace</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 7]) }}" class="">Clive Christian</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 8]) }}" class="">Dolce Cabbana</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 9]) }}" class="">Jean Paul Gaultier</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <form class="ms-3 mb-2 filter-price" action="{{ route('products.filter') }}" method="get">
                                        <div class="">
                                            <h3>GIỚI TÍNH</h3>
                                            <div class="item-child">
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px; margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Nam">Nam
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Nữ">Nữ
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Unisex">Unisex
                                                    </label>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="filter-sidebar">
                                            <h3>THEO GIÁ</h3>
                                            <div class="item-child">
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="1500000-3000000">1.500.000 - 3.000.000
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="3000000-5000000">3.000.000 - 5.000.000
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="5000000-100000000">&gt;5.000.000
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <button class="btsearch mb-2" type="submit">Lọc</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex col mb-5">
                <div class=" d-flex col flex-wrap text-center gap-3 ms-lg-5 product-card">
                    @foreach($products as $row)
                    @if (($catalog === null || $row->catalog_id == $catalog->id) && ($genderFilter === null || $row->sex == $genderFilter)&& ($priceRange === null || ($row->price >= $priceRange[0] && $row->price <= $priceRange[1]))) <div class="products">
                        <div class="pro">
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
                            </div>
                        </div>

                </div>
                @endif

                @endforeach
            </div>
        </div>
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
