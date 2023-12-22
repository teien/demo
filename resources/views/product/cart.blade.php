@extends('layouts.frontend')

@section('content')
    <section class="bg-light my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card border shadow-0" style="min-height: 530px;">
                        <div class="m-4">
                            <h4 class="card-title mb-5 text-center">Your shopping cart</h4>
                            @foreach ($cartItems as $item)
                                <div class="row mb-5 align-items-center text-center border-bottom">
                                    <div class="col-lg-5">
                                        <div class="me-lg-5">
                                            <div class="d-flex align-items-center text-center">
                                                <img src="{{ asset($item->attributes->first()) }}" width="100" alt="Thumbnail" loading="lazy" />
                                                <div class="">
                                                    <a href="#" class="nav-link font-mono text-success">{{ $item->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                        <div class="">
                                            <div class="relative flex flex-row me-5 border">
                                                <form class="update-form update-input" action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="number" name="quantity" style="width: 50px;" data-price="{{ $item->price }}" value="{{ $item->quantity }}" class="text-center border quantityInput " />
                                                </form>
                                            </div>
                                        </div>
                                        <div class="float-md-end">
                                            <text class="h6"> {{ ($item->price) * ($item->quantity) }} đ </text> <br />
                                            <small class="text-muted text-nowrap item-price">{{ ($item->price) }} đ / per item </small>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                        <div class="float-md-end">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-light border text-danger icon-hover-danger">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="border-top pt-4 mx-4 mb-4">
                                <p><i class="fas fa-truck text-muted fa-lg">
                                    </i> Free Delivery within 1-2 weeks</p>
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-3 border shadow-0">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Have coupon?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                                        <button class="btn btn-light border">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2" id="totalPrice">{{ Cart::getTotal() }} đ</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Discount:</p>
                                <p class="mb-2 text-success">-$60.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">TAX:</p>
                                <p class="mb-2">$14.00</p>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2 fw-bold" id="finalPrice"> đ</p>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
                                <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var updateInputs = document.querySelectorAll('.update-input');
    updateInputs.forEach(function(updateInput) {
        updateInput.addEventListener('change', function() {
            var productId = updateInput.querySelector('[name="id"]').value;
            var productQuantity = updateInput.querySelector('[name="quantity"]').value;
            var quantityInput = updateInput.querySelector('.quantityInput');
            $.ajax({
                type: 'POST',
                url: "{{ route('cart.update') }}",
                data: {
                    id: productId,
                    quantity: productQuantity,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    var priceElement = updateInput.closest('.row').querySelector('.h6');
                    var price = quantityInput.dataset.price;
                    var totalPriceElement = document.getElementById('totalPrice');
                    var finalPriceElement = document.getElementById('finalPrice');
                    priceElement.textContent = price * productQuantity;
                    totalPriceElement.textContent = response.total_price + ' đ';
                    finalPriceElement.textContent = response.total_price - 1000000 + ' đ';
                    updateCartInHeader();

                },
                error: function(error) {
                    console.log(error);
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
@endsection
