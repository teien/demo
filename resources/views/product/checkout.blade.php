<html lang="en">

<head>
    <meta charset="utf-8">

    <title>
        Checkout
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style type="text/css">
        body {
            margin-top: 20px;
            background-color: #f1f3f7;
        }

        .card {
            margin-bottom: 24px;
            -webkit-box-shadow: 0 2px 3px #e4e8f0;
            box-shadow: 0 2px 3px #e4e8f0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.5rem 1.5rem;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff0f2;
            border-radius: 1rem;
        }

        .activity-checkout {
            list-style: none;
        }

        .activity-checkout .checkout-icon {
            position: absolute;
            top: -4px;
            left: -24px;
        }

        .activity-checkout .checkout-item {
            position: relative;
            padding-bottom: 24px;
            padding-left: 35px;
            border-left: 2px solid #f5f6f8;
        }

        .activity-checkout .checkout-item:first-child {
            border-color: #3b76e1;
        }

        .activity-checkout .checkout-item:first-child:after {
            background-color: #3b76e1;
        }

        .activity-checkout .checkout-item:last-child {
            border-color: transparent;
        }

        .activity-checkout .checkout-item.crypto-activity {
            margin-left: 50px;
        }

        .activity-checkout .checkout-item .crypto-date {
            position: absolute;
            top: 3px;
            left: -65px;
        }

        .avatar-xs {
            height: 1rem;
            width: 1rem;
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .avatar {
            height: 3rem;
            width: 3rem;
        }

        .avatar-md {
            height: 4rem;
            width: 4rem;
        }

        .avatar-lg {
            height: 5rem;
            width: 5rem;
        }

        .avatar-xl {
            height: 6rem;
            width: 6rem;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #3b76e1;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 8px;
        }

        .avatar-group .avatar-group-item {
            margin-left: -8px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .avatar-group .avatar-group-item:hover {
            position: relative;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        .card-radio {
            background-color: #fff;
            border: 2px solid #eff0f2;
            border-radius: 0.75rem;
            padding: 0.5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
        }

        .card-radio:hover {
            cursor: pointer;
        }

        .card-radio-label {
            display: block;
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px;
        }

        .card-radio-input {
            display: none;
        }

        .card-radio-input:checked+.card-radio {
            border-color: #3b76e1 !important;
        }

        .font-size-16 {
            font-size: 16px !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        a {
            text-decoration: none !important;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #545965;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e2e5e8;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.75rem;
            -webkit-transition: border-color 0.15s ease-in-out,
                -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out,
                -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
                -webkit-box-shadow 0.15s ease-in-out;
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px;
        }

        .ribbon {
            position: absolute;
            right: -26px;
            top: 20px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            padding: 1px 22px;
            font-size: 13px;
            font-weight: 500;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<body>
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
                    <a class="nav-link fw-bolder fs-4 me-4 {{ Request::is('') ? 'active' : '' }}"  href="#">Liên hệ</a>
                </li>
            </ul>

            <div class="icon-header d-flex align-items-center ms-auto gap-5 me-5">
                <a href="login" class="text-decoration-none">
                    <i class="far fa-user ms-2"></i>
                </a>
                <a href="{{ route('cart.list') }}" class="flex items-center position-relative text-decoration-none">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cartContainer" class="badge rounded-circle bg-danger position-absolute top-0 start-100 translate-middle ">{{ Cart::getTotalQuantity()}}</span>
                </a>
            </div>
        </div>
    </nav>
</header >

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <ol class="activity-checkout mb-0 px-4 mt-3">
                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-receipt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Billing Info</h5>
                                        <div class="mb-3">
                                            <form>

                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-name">Name</label>
                                                                <input type="text" class="form-control" id="billing-name" placeholder="Enter name" value="{{ Auth::user()->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-email-address">Email</label>
                                                                <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email" value="{{ Auth::user()->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-phone">Phone</label>
                                                                <input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no." value="{{ Auth::user()->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Address</label>
                                                        <textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-4 mb-lg-0">
                                                                <label class="form-label" for="billing-city">City</label>
                                                                <input type="text" class="form-control" id="billing-city" placeholder="Enter City">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <label class="form-label" for="zip-code">Zip / Postal code</label>
                                                                <input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <div class="row">
                                            <div class="container">
                                                <h1 class="h3 mb-5">Payment</h1>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="accordion" id="accordionPayment">
                                                            <div class="accordion-item mb-3">
                                                                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                                                                        <input class="form-check-input" type="radio" name="payment" id="payment1" />
                                                                        <label class="form-check-label pt-1" for="payment1">
                                                                            Credit Card
                                                                        </label>
                                                                    </div>
                                                                    <span>
                                                                        <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                                                                            <g fill-rule="nonzero" fill="#333840">
                                                                                <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                                                                                <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                </h2>
                                                                <div id="collapseCC" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style>
                                                                    <div class="accordion-body">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Card Number</label>
                                                                            <input type="text" class="form-control" placeholder />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Name on card</label>
                                                                                    <input type="text" class="form-control" placeholder />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Expiry date</label>
                                                                                    <input type="text" class="form-control" placeholder="MM/YY" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">CVV Code</label>
                                                                                    <input type="password" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="accordion-item mb-3 border">
                                                                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePP" aria-expanded="false">
                                                                        <input class="form-check-input" type="radio" name="payment" id="payment2" />
                                                                        <label class="form-check-label pt-1" for="payment2">
                                                                            PayPal
                                                                        </label>
                                                                    </div>
                                                                    <span>
                                                                        <svg width="103" height="25" xmlns="http://www.w3.org/2000/svg">
                                                                            <g fill="none" fill-rule="evenodd">
                                                                                <path d="M8.962 5.857h7.018c3.768 0 5.187 1.907 4.967 4.71-.362 4.627-3.159 7.187-6.87 7.187h-1.872c-.51 0-.852.337-.99 1.25l-.795 5.308c-.052.344-.233.543-.505.57h-4.41c-.414 0-.561-.317-.452-1.003L7.74 6.862c.105-.68.478-1.005 1.221-1.005Z" fill="#009EE3"></path>
                                                                                <path d="M39.431 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.81c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.416 0-.561-.267-.469-.863l2.158-13.846c.106-.68.362-.934.827-.934h6.263Zm-4.257 7.413h2.129c1.331-.051 2.215-.973 2.304-2.636.054-1.027-.64-1.763-1.743-1.757l-2.003.009-.687 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.043.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.432-8.982c.072-.451-.039-.672-.38-.672H53.05c-.23 0-.343.128-.402.48l-.095.552c-.049.288-.18.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.581.074-5.996 2.793-6.255 6.279-.2 2.696 1.732 4.813 4.279 4.813 1.848 0 2.674-.543 3.605-1.395l-.007-.005Zm-1.946-1.382c-1.542 0-2.616-1.23-2.393-2.738.223-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.394 2.737-.223 1.508-1.664 2.738-3.207 2.738Zm11.685-7.971h-2.355c-.486 0-.683.362-.53.808l2.925 8.561-2.868 4.075c-.241.34-.054.65.284.65h2.647a.81.81 0 0 0 .786-.386l8.993-12.898c.277-.397.147-.814-.308-.814H67.6c-.43 0-.602.17-.848.527l-3.75 5.435-1.676-5.447c-.098-.33-.342-.511-.793-.511h-.002Z" fill="#113984"></path>
                                                                                <path d="M79.768 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.808c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.417 0-.562-.267-.47-.863l2.162-13.85c.107-.68.362-.934.828-.934h6.257v.004Zm-4.257 7.413h2.128c1.332-.051 2.216-.973 2.305-2.636.054-1.027-.64-1.763-1.743-1.757l-2.004.009-.686 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.044.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.431-8.982c.073-.451-.038-.672-.38-.672h-2.55c-.23 0-.343.128-.403.48l-.094.552c-.049.288-.181.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.582.074-5.997 2.793-6.256 6.279-.199 2.696 1.732 4.813 4.28 4.813 1.847 0 2.673-.543 3.604-1.395l-.01-.005Zm-1.944-1.382c-1.542 0-2.616-1.23-2.393-2.738.222-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.393 2.737-.223 1.508-1.665 2.738-3.206 2.738Zm10.712 2.489h-2.681a.317.317 0 0 1-.328-.362l2.355-14.92a.462.462 0 0 1 .445-.363h2.682a.317.317 0 0 1 .327.362l-2.355 14.92a.462.462 0 0 1-.445.367v-.004Z" fill="#009EE3"></path>
                                                                                <path d="M4.572 0h7.026c1.978 0 4.326.063 5.895 1.45 1.049.925 1.6 2.398 1.473 3.985-.432 5.364-3.64 8.37-7.944 8.37H7.558c-.59 0-.98.39-1.147 1.449l-.967 6.159c-.064.399-.236.634-.544.663H.565c-.48 0-.65-.362-.525-1.163L3.156 1.17C3.28.377 3.717 0 4.572 0Z" fill="#113984"></path>
                                                                                <path d="m6.513 14.629 1.226-7.767c.107-.68.48-1.007 1.223-1.007h7.018c1.161 0 2.102.181 2.837.516-.705 4.776-3.793 7.428-7.837 7.428H7.522c-.464.002-.805.234-1.01.83Z" fill="#172C70"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                </h2>
                                                                <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style>
                                                                    <div class="accordion-body">
                                                                        <div class="px-2 col-lg-6 mb-3">
                                                                            <label class="form-label">Email address</label>
                                                                            <input type="email" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                </div>
                <div class="row my-4">
                    <div class="col">
                        <a href="products" class="btn btn-link text-muted">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping
                        </a>
                    </div>
                    <div class="col">
                        <div class="text-end mt-2 mt-sm-0">
                            <a href="#" class="btn btn-success">
                                <i class="mdi mdi-cart-outline me-1"></i> Procced
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('includes.footer')
</body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
