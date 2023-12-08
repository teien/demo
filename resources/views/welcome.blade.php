<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-fluid">
        <div id="Banner" class="Banner">
            <div class="video">
                <video loop autoplay mutes>
                    <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
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
        <div class="distance"></div>
        <div class="container">


            <div id="product">
                <a class="align-content-center text-decoration-none text-center d-block">THƯƠNG HIỆU NỔI TIẾNG</a>
                <div class="listbrand row card-img-top d-flex flex-wrap">
                    <div class="col-2  imgbrand">
                        <a class="logobrand" href="#">
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
            <div id="products1" class="product">
                <a>SẢN PHẨM NỔI BẬT</a>
                <div class="pro-container">
                    <div class="pro">
                        <img src="https://xxivstore.com/wp-content/uploads/2022/09/Marie-Jeanne-Vetiver-Santal-300x300.png" alt="" />
                        <div class="des">
                            <span>HOT</span>
                            <h5>Vetiver Santal</h5>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label for="star5"></label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label for="star1"></label>
                            </div>
                            <h4>5.100.000 ₫</h4>
                            <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
                        </div>
                    </div>
                </div>

                <div id="Letter" class="Letter text-center">
                    <h1>Đăng ký thành viên để nhận khuyến mại</h1>
                    <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
                    <div class="d-flex justify-content-center">
                        <input type="text" placeholder="nhập mail" />
                        <a class="mail-btn">Đăng kí</a>
                    </div>
                </div>

                <div class="Follow d-flex justify-content-center">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-telegram"></i>
                </div>
            </div>
        </div>

    </div>
    @include('includes.footer')
</body>

</html>
