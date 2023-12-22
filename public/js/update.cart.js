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

