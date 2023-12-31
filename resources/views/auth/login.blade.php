<!DOCTYPE html>
   <html lang="en">
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/contacts/contact-1/assets/css/contact-1.css">


</head>
   <body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ms-5" href="/home">
            <img width="100px" class="d-sm-block d-none" src="https://xxivstore.com/wp-content/uploads/2023/10/XXIV-Logo-2.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-sm-5">
                <li class="nav-item ">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('home') ? 'active' : '' }}" href="/home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('about') ? 'active' : '' }}" href="/about">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('product') ? 'active' : '' }}" href="/product">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('Blog') ? 'active' : '' }}" href="/blog">Blog</a>
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
<x-guest-layout>
    <x-authentication-card>


        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" style="height: 45px;" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" style="height: 45px;" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex-column items-center justify-center mt-4">
                <x-button class="btngg" style="font-size: 20px; border-radius: 8px; ">
                    {{ __('Log in') }}
                </x-button>
                @if (Route::has('password.request'))
                <a class="underline text-sm" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif


            </div>
            <div>
                <p class="text_p">
                    Bạn không có tài khoản?
                    <a href=" {{url('/register')}}" class="span">Đăng kí</a>
                </p>
                <p class="text_p line">Hoặc với</p>

                <div class="flex-row ">
                    <a href="{{ url('auth/google/redirect') }}" style="width: 100%;">
                        <button type="button" class="btngg">
                            <svg xml:space="preserve" style="enable-background: new 0 0 512 512" viewBox="0 0 512 512" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" width="20" version="1.1">
                                <path d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256  c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
            C103.821,274.792,107.225,292.797,113.47,309.408z" style="fill: #fbbb00"></path>
                                <path d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
            c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
            c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z" style="fill: #518ef8"></path>
                                <path d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
            c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
            c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z" style="fill: #28b446"></path>
                                <path d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
            c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
            C318.115,0,375.068,22.126,419.404,58.936z" style="fill: #f14336"></path>
                            </svg>
                            Login with Google</button>
                    </a>
                    <!-- <a href="{{url('auth/fb/redirect')}}" style="width: 100%;">
                        <button type="button" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" wid
                            th="32" viewBox="0 0 48 48">
                                <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#2aa4f4"></stop>
                                    <stop offset="1" stop-color="#007ad9"></stop>
                                </linearGradient>
                                <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                                <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                            </svg>

                            FaceBook
                        </button>
                    </a> -->

                </div>



        </form>
    </x-authentication-card>
</x-guest-layout>
</body>
   </html>
