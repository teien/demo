<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
  @include('includes.header')
    <div class="distance"></div>

    <div class="container">
      <h1 class="d-flex justify-content-center mb-5">blog</h1>
      <p
        style="
          color: #565656;
          font-size: 15px;
          background-color: #fafafa;
          padding: 10px;
          margin-bottom: 50px;
        "
      >
      <a style="text-decoration: none; color: #565656" href="/home">Trang chủ</a> /
        <a style="text-decoration: none; color: #565656" href="/blog"
          >Blog</a>
        chương trình quà tặng nhân ngày 20-10
      </p>
      <h2>chương trình quà tặng nhân ngày 20-10</h2>
      <br />
      <img class="d-flex m-auto mb-5" style="width:700px ;" src="https://xxivstore.com/wp-content/uploads/2022/10/311592131_658719648988884_6693361248492413895_n-1024x1024.jpg" alt="">
      <h5
        style="
          font-family: 'Courier New', Courier, monospace;
          font-size: 16px;
          margin-bottom: 50px;
          line-height: 1;
        "
      >
        “Quà tặng tiền triệu KHÔNG GIỚI HẠN”?? BUY 1 GET 1 FREE??? Chắc hẳn
        những sản phẩm nhà Maison Martin 15ml không còn xa lạ gì với mọi người
        nữa rồi đúng không ạ? Thật bất ngờ đó chính là món quà mà chúng mình
        muốn gửi tặng đến những quý khách hàng yêu thương nhân ngày 20/10 sắp
        tới. *Với những hoá đơn từ 5 triệu trở lên sẽ được tặng 1 chai 15ml bất
        kì đến từ Maison Martin trị giá 950.000đ cực kỳ chất lượng. *Với những
        hoá đơn dưới 5 triệu thì sẽ được tặng 1 hộp quà craft xinh xắn fit với
        chai nước hoa mà mọi người lựa chọn. Đối tượng áp dụng: Áp dụng với mọi
        đơn hàng từ ngày 14/10-20/10 tại Hà Nội và Hồ Chí Minh Hãy nhanh tay
        inbox fanpage hoặc qua trực tiếp XXIV STORE để lựa cho mình và người
        thương mùi hương phù hợp nhất nhé!
      </h5>
      <h4>bài viết liên quan</h4>
      <div
        style="width: 98%; border-top: 0.5px solid #565656; margin-bottom: 50px"
      ></div>

      <div class="d-flex flex-wrap col-12 gap-3">
        <a href="{{ url('/blog/lightblue') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/c7/XXiV-Review-Light-Blue-Forever-c78358f4.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Light Blue Forever Pour Homme, phiên bản hay nhất của Light Blue cho
            nam
          </p>
        </a>
        <a href="{{ url('/blog/nasomattoblack') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/a2/XXIV-Review-Black-Afgano-a2214809.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Nasomatto Black Afgano và trải nghiệm mùi cần sa trong thế giới nước
            hoa
          </p>
        </a>
        <a href="{{ url('/blog/blackfriday') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/87/Chuong-trinh-black-friday-xxiv-store-8700478b.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            ⚡️ MUA CÀNG NHIỀU – GIẢM CÀNG ĐÃ ⚡️
          </p>
        </a>
        <a href="{{ url('/blog/perfumebar') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/20/Sieu-sale-sinh-nhat-XXIV-Store-20b5e727.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            BIRTHDAY SALE – XXIV PERFUME BAR TURNING 3!
          </p>
        </a>
        <a href="{{ url('/blog/nasomattoduro') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/70/duro-70abe648.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Nasomatto Duro – Don’t mess with me!
          </p>
        </a>
        <a href="{{ url('/blog/getfree') }}" style="text-decoration: none" class="col-2">
          <div>
            <img
              class="object-fit-none"
              height="150px"
              width="98%"
              src="https://xxivstore.com/wp-content/themes/yootheme/cache/c5/311592131_658719648988884_6693361248492413895_n-c506c104.webp"
              alt=""
            />
          </div>
          <p
            style="
              font-size: 15px;
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
            "
          >
            Chương trình quà tặng nhân ngày 20-10
          </p>
        </a>
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

    <div class="Footer d-flex flex-row col-12">
      <div class="d-flex flex-column col-4 text-center">
        <h3>xxiv store</h3>
        <a href="">ưu đãi thành viên</a>
        <a href="">tài khoản</a>
        <a href="">tuyển dụng</a>
      </div>
      <div class="d-flex flex-column col-4 text-center">
        <h3>chính sách bán hàng</h3>
        <a href="">phương thức vận chuyển</a>
        <a href="">câu hỏi thường gặp</a>
        <a href="">điều khoản và điện kiện sử dụng</a>
        <a href="">điều khoản và điều kiện bán hàng</a>
        <a href="">thông báo pháp lý</a>
      </div>
      <div class="d-flex flex-column col-4 text-center">
        <h3>thông tin chung</h3>
        <a href="">giới thiệu</a>
        <a href="">blog</a>
        <a href="">liên hệ</a>
        <a href="">sản phẩm</a>
      </div>
    </div>

    <div class="Footer-bot">
      <p>© xxiv 2021 | all right reserved</p>
    </div>
  </body>
</html>
