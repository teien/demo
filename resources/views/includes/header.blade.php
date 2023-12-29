<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ms-5" href="#">
            <img width="100px" src="https://xxivstore.com/wp-content/uploads/2023/10/XXIV-Logo-2.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('home') ? 'active' : '' }}" href="/home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('about') ? 'active' : '' }}" href="/about">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('') ? 'active' : '' }}" href="/cart">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('') ? 'active' : '' }}" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('') ? 'active' : '' }}"  href="/contact">Liên hệ</a>
                </li>
            </ul>

            <div class="icon-header d-flex align-items-center ms-auto gap-5 me-5">
                <input class="form-control d-none d-sm-block" type="text" placeholder="Search..">
                <i class="fas fa-search ms-2 d-none d-sm-inline"></i>
                <a href="login" class="text-decoration-none">
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
