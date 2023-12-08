<div id="products1" class="product">
    <a>SẢN PHẨM NỔI BẬT</a>
    <div class="owl-carousel owl-theme ms-4">
        @foreach ($product as $index )
        <div class=" pro item text-center">
            <img src="{{ asset($index->img_link) }} " class="img-fluid" alt="" />
            <h5 style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis; text-align: center; margin: 15px 22px;">{{$index->name}}</h5>
            <h4 class="mt-2">{{$index->price}} ₫</h4>
            <div class="des">
                <div class="rating ms-auto">
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
            </div>
            <button class="CartBtn">
                <span class="IconContainer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart">
                        <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                    </svg>
                </span>
                <p class="text mt-3">Add to Cart</p>
            </button>
        </div>
        @endforeach
    </div>
</div>
