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
    <div class="container mt-5">
      <div class="container-fluid">
        <div class="d-flex col-12">
          <div class="row mb-5">
            <img
              class="col-5 me-5"
              style="max-width: 30%"
              src="https://images.pexels.com/photos/6177568/pexels-photo-6177568.jpeg?auto=compress&cs=tinysrgb&w=600"
              alt=""
            />
            <p class="col-7">
              <span class="d-block fs-1 mb-5 fw-bold"
                > xxiv ceo/ founder</span
              >
              <span class="d-block mb-1">
                là một người yêu thích mùi hương, mình đã phát triển một kênh
                youtube cá nhân để có thể chia sẻ kiến thức cũng như là kinh
                nghiệm của mình trong lĩnh vực này.</span
              ><br />
              <span class="d-block mb-1"
                >bắt đầu từ nă m 2019 đến nay, mình đã may mắn có một lượng lớn
                người theo dõi trên kênh youtube cá nhân, đồng thời hiện tại có
                hai cửa hàng mang thương hiệu xxiv tại hà nội và sài gòn.</span
              ><br />
              <span class="d-block mb-1">
                trong tương lai ở việt nam, mình tin rằng lĩnh vực này còn phát
                triển nữa. rất mong được các bạn ủng hộ nhé!</span
              >
            </p>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="d-flex col-12">
          <div class="row mb-5">
            <p class="col-6 me-5">
              <span class="d-block fs-1 mb-5 fw-bold"
                >câu chuyện về xxiv store</span
              >
              <span class="d-block mb-1"
                >xxiv store là một tiệm nước hoa nho nhỏ bắt nguồn từ đam mê về
                mùi hương cũng như việc mong muốn chia sẻ với tất cả các bạn về
                sở thích của tụi mình, đồng thời tạo ra một nơi giúp mọi người
                dễ dàng sở hữu bất cứ chai nước hoa nào bạn muốn. và rồi cứ thế,
                với mục tiêu lan toả hương thơm và niềm đam mê mà xxiv lớn lên
                và được tin tưởng hơn mỗi ngày.</span
              ><br />
            </p>
            <img
              class="col-5"
              style="max-width: 100%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/82/cover-822e5984.webp"
              alt=""
            />
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="d-flex col-12">
          <div class="row mb-5">
            <img
              class="col-5"
              style="max-width: 32%"
              src="https://file.hstatic.net/1000339918/file/le-labo-santal-33-edp-100ml__3__43a91179e7d34bf8978d5b2f2c5a2c20.jpg"
              alt=""
            />
            <p class="col-7">
              <span class="d-block mt-5 ms-5 mb-4">
                Tại XXIV, chúng mình luôn đặt chất lượng và lòng tin với khách
                hàng lên hàng đầu. Cũng vì một phần có gia đình và bạn bè đang ở
                Pháp, chính tay lựa chọn từ store nên XXIV tự tin 100% hàng
                chính hãng. Bọn mình sẽ không cam kết bán giá rẻ nhất và cạnh
                tranh với các bên khác mà chỉ cam kết sẽ bán giá tốt nhất chúng
                mình có thể. Những sản phẩm chúng mình tư vấn và giới thiệu đều
                là các sản phẩm đã trực tiếp sử dụng và trải nghiệm để đưa ra
                lời khuyên thực tế giúp các khách hàng hài lòng.
              </span>
            </p>
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


