<!DOCTYPE html>
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
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>


    <div id="Banner" class="Banner">
        <div class="video">
            <video loop autoplay mutes>
                <source src="{{ asset('assets/video/1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-banner">
            <h1>xxiv store</h1><!--  -->
            <h2>You deserve to be happy</h2>
            <a href="">FOLLOW ME</a>
            <div class="details-text-banner">
                <p>
                    chào mừng các bạn đến với XXIV store – một tiệm nước<br />
                    hoa nho nhỏ lấy cảm hứng từ những con người có cảm <br />
                    xúc đặc biệt biệt với hương thơm mê hoặc.
                </p>
            </div>
        </div>
    </div>
    @include('includes.header')
    <div class="container-fluid">
        <div class="distance"></div>
        <div class="container">
            <div id="product">
                <a class="align-content-center text-decoration-none text-center d-block">THƯƠNG HIỆU NỔI TIẾNG</a>
                <div class="listbrand row card-img-top d-flex flex-wrap">
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="product?catalog=7">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2023/11/Nuoc-hoa-Clive-Christian.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2023/11/Nuoc-hoa-Xerjoff.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2021/03/nuoc-hoa-le-labo.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2022/08/Hang-nuoc-hoa-Zoologist.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2022/04/Orto-Parisi.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2022/07/Hang-nuoc-hoa-Imaginary-Authors.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2023/11/Nuoc-hoa-Ex-Nihilo.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2022/07/159133030_1044233219399119_4321418372070751780_n.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2021/03/nuoc-hoa-tomford.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2023/11/Logo-Carner-Barcelnoa.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2021/07/Nasomatto.png">
                        </a>
                    </div>
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
                            <img class="img-fluid m-3" src="https://xxivstore.com/wp-content/uploads/2021/03/nuoc-hoa-mfk.png">
                        </a>
                    </div>
                </div>
            </div>

        </div>
        @include('product.hot_product')
        <div class="distance"></div>

        <div class="container">
            <h2 class="text-center mt-4 mb-4">Tại sao chọn xxiv store</h2>
            <div class="row">
                <div class="col-4 justify-center">
                    <div class="flex-column">
                        <img class="d-flex m-auto" width="100px" src="{{ asset('assets/img/featured/grommet-icons_shield-security.svg') }}" alt="image">
                        <h5 class="text-center">sản phẩm chính hãng</h5>
                        <p class="text-center">sản phẩm nước hoa được mua trực tiếp tại các store ở nước ngoài hoặc làm việc trực tiếp với các hãng, cam kết authentic 100%</p>
                    </div>
                </div>
                <div class="col-4 justify-center">
                    <div class="flex-column">
                        <img class="d-flex  m-auto" width="200px" src="{{ asset('assets/img/featured/free-ship.svg') }}" alt="image">
                        <h5 class="text-center">free ship toàn quốc</h5>
                        <p class="text-center">xxiv áp dụng freeship cho tất cả các khách hàng trên toàn quốc. chúng tôi chưa áp dụng hình thức giao hàng quốc tế tại thời điểm này</p>
                    </div>
                </div>
                <div class="col-4 justify-center">
                    <div class="flex-column">
                        <img class="d-flex m-auto" width="150px" src="{{ asset('assets/img/featured/gift.svg') }}" alt="image">
                        <h5 class="text-center">thành viên thân thiết</h5>
                        <p class="text-center">thành viên vàng sẽ được giảm 5% / đơn hàng. với thành viên bạc khách được giảm 3% / đơn hàng.</p>
                    </div>
                </div>
            </div>



            <div class="Follow d-flex justify-content-center">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-telegram"></i>
            </div>
        </div>
        <div class="img-home"></div>
        <div id="Letter" class="Letter text-center">
            <h1>Đăng ký thành viên để nhận khuyến mại</h1>
            <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
            <div class="d-flex justify-content-center">
                <input type="text" placeholder="nhập mail" />
                <a href="/register" class="mail-btn">Đăng kí</a>
            </div>
        </div>
    </div>

    @include('alert.addToCardSucess')
    </div>

    @include('includes.footer')
</body>
<script src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    window.onload = function() {
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    600: {

                        items: 1,
                        nav: false,
                        dots: false
                    },

                    1300: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            })
        });
    }
</script>

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


                        setTimeout(function() {
                            notification.removeClass('show');
                        }, 3000);
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
</script>



</html>
