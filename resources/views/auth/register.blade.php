
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
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full inputForm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full inputForm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                    <div class="mt-4">
                        <x-label for="phone" value="{{ __('Phone') }}" />
                        <x-input id="phone" class="block mt-1 w-full inputForm" type="text" name="phone" :value="old('phone')" required autocomplete="phone" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" />
                    </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full inputForm"  type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full inputForm" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ms-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>

    </body>
   </html>
