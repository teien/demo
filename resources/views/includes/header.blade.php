<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ms-5" href="/home">
            <img width="100px" class="d-sm-block d-none" src="https://xxivstore.com/wp-content/uploads/2023/10/XXIV-Logo-2.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-sm-5">
                <li class="nav-item ">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('home')|| Request::is('/') ? 'active' : '' }}" href="/home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('about') ? 'active' : '' }}" href="/about">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('product') ? 'active' : '' }}" href="/product">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Liên hệ</a>
                </li>
            </ul>

            <div class="icon-header d-flex align-items-center ms-auto gap-5 me-5 ms-sm-5">
                <form action="{{ route('search') }}" class="search" method="GET">
                    <input style="" class="ipsearch" type="text" name="search" placeholder="Bạn cần tìm ..." title="Type in a name">

                    <button class="btsearch" type="submit">Tìm kiếm</button>
                </form>
                <a href="{{route('login')}}" class="text-decoration-none">
                    <i class="far fa-user ms-2"></i>
                </a>
                <a href="{{ route('cart.list') }}" class="flex items-center position-relative text-decoration-none">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cartContainer" class="badge rounded-circle bg-danger position-absolute top-0 start-100 translate-middle">{{ Cart::getTotalQuantity()}}</span>
                </a>
            </div>
        </div>
    </nav>
</header>
