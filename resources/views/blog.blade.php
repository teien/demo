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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('includes.header')
    <div id="banner" class="banner">
            <img
                o
                height="700px"
                width="100%"
                src="https://images.pexels.com/photos/4239009/pexels-photo-4239009.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt=""
            />
        </div>

        <div id="blog-content" class="blog-content">
            <div class="container-fluid">
                <div class="d-flex justify-content-center">
                    <button class="btn-filter-blog" type="button">
                        mùi cần sa
                    </button>
                    <button class="btn-filter-blog" type="button">
                        phiên bản hay nhất
                    </button>
                    <button class="btn-filter-blog" type="button">
                        giảm giá sâu
                    </button>
                    <button class="btn-filter-blog" type="button">
                        BIRTHDAY SALE
                    </button>
                    <button class="btn-filter-blog" type="button">20-10</button>
                </div>
                <div
                    class="d-flex flex-wrap align-content-start justify-content-center col-12 gap-5"
                >
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/70/duro-70abe648.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                XXIV Review – Nasomatto Duro – Don’t mess with
                                me!
                            </h5>
                            <p class="card-text">
                                Xịt vài shots Duro, tôi cảm thấy như mình được
                                giữ ấm bằng một chiếc áo da bụi bặm, đang ngồi
                                trên hiên của một ngôi nhà gỗ cũ kĩ giữa rừng..
                            </p>
                            <a href="{{ url('/blog/nasomattoduro') }}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/c7/XXiV-Review-Light-Blue-Forever-c78358f4.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                XXIV Review – Light Blue Forever Pour Homme,
                                phiên bản hay nhất của Light Blue cho nam
                            </h5>
                            <p class="card-text">
                                Đầu năm nay, khi nghe tin sắp ra mắt Light Blue
                                Forever, tôi có phần dửng dưng vì nghĩ sẽ lại là
                                một thất bại nữa của line nước hoa này. Ấy vậy
                                mà có lẽ tôi đã sai, lần này hãng đã làm ra một
                                chai nước hoa thực sự tốt, khiến tôi phải rút
                                hầu bao sở hữu nó ngay trong lần thử đầu tiên.
                            </p>
                            <a href="{{ url('/blog/lightblue') }}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/a2/XXIV-Review-Black-Afgano-a2214809.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                XXIV Review – Nasomatto Black Afgano và trải
                                nghiệm mùi cần sa trong thế giới nước hoa
                            </h5>
                            <p class="card-text">
                                Với mỗi mùi hương của Nasomatto, tôi luôn coi
                                chúng không chỉ là những chai nước hoa thông
                                thường, mà là những tác phẩm nghệ thuật. Thành
                                công nhất trong những tác phẩm của hãng cho đến
                                giờ, chắc chắn là Black Afgano
                            </p>
                            <a href="{{ url('/blog/nasomattoblack') }}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/87/Chuong-trinh-black-friday-xxiv-store-8700478b.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                ⚡️ MUA CÀNG NHIỀU – GIẢM CÀNG ĐÃ ⚡️
                            </h5>
                            <p class="card-text">
                                BLACK FRIDAY năm nay của XXIV có gì? Chắc chắn
                                một dịp lễ lớn cho dân sành shopping thì đây là
                                dịp lớn nhất để rinh về deal hời đúng không. Thế
                                nên chúng tôi mang đến một ưu đãi cực lớn, một
                                chương trình giảm giá sâu cho tất cả các sản
                                phẩm. Cụ […]
                            </p>
                            <a href="{{ url('/blog/blackfriday') }}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/20/Sieu-sale-sinh-nhat-XXIV-Store-20b5e727.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                BIRTHDAY SALE – XXIV PERFUME BAR TURNING 3!
                            </h5>
                            <p class="card-text">
                                XXIV PERFUME BAR lại thêm tuổi mới. Ba năm một
                                chặng đường, chúng tôi luôn tự hào khi đem đến
                                những sản phẩm chất lượng cùng câu chuyện mùi
                                hương hấp dẫn chia sẻ với khách hàng. Và để thêm
                                niềm vui trong dịp đặc biệt này, chúng tôi muốn
                                gửi đến một ưu đãi […]
                            </p>
                            <a href="{{ url('/blog/perfumebar') }}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="card custom-style" style="width: 23%">
                        <img
                            src="https://xxivstore.com/wp-content/themes/yootheme/cache/c5/311592131_658719648988884_6693361248492413895_n-c506c104.webp"
                            class=""
                            alt="..."
                        />
                        <div class="card-body">
                            <h5 class="card-title">
                                Chương trình quà tặng nhân ngày 20-10
                            </h5>
                            <p class="card-text">
                                “Quà tặng tiền triệu KHÔNG GIỚI HẠN” BUY 1 GET 1
                                FREE Chắc hẳn những sản phẩm nhà Maison Martin
                                15ml không còn xa lạ gì với mọi người nữa rồi
                                đúng không ạ? Thật bất ngờ đó chính là món quà
                                mà chúng mình muốn gửi tặng đến những quý khách
                                hàng yêu […]
                            </p>
                            <a href="{{ url('/blog/getfree') }}">Xem thêm</a>
                        </div>
                    </div>
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
        @include('includes.footer')
</body>
</html>
