showCart();
updateTotalPrice();

jQuery(document).on('click', '.delete-product', function () {
    let productId = parseInt(jQuery(this).data('product-id'));
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];
    var filtered = cart.filter(function (value, index, arr) {
        return value['id'] !== productId;
    });
    localStorage.setItem('cart', JSON.stringify(filtered));
    showCart();
    updateTotalPrice();
});

jQuery(document).on('change', '.quantity', function () {
    let productId = parseInt(jQuery(this).data('product-id'));
    let quantity = parseInt(jQuery(this).val());
    increaseQuantity(productId, quantity);
    updateTotalPrice();
});

jQuery(document).on('click', '.checkout', function () {
    if (jQuery('.checkout-form').is(':visible')) {
        jQuery('.checkout-form').hide();
    } else {
        jQuery('.checkout-form').show();
    }
});

function updateTotalPrice() {
    let cart = localStorage.getItem('cart');
    let total = 0;
    cart = cart ? JSON.parse(cart) : [];
    for (let i = 0; i < cart.length; i++) {
        total += cart[i]['price'] * cart[i]['quantity'];
    }
    jQuery('#total-price').html(total.toLocaleString());
}

function showCart() {
    let cart = localStorage.getItem('cart');
    cart = cart ? JSON.parse(cart) : [];
    jQuery('#products').empty();
    for (let i = 0; i < cart.length; i++) {
        let product = cart[i];
        let html = '<tr>\n' +
            '<td style="display: flex;align-items: center;"><img style="width:70px" src="' + product['image'] + '"/></td>\n' +
            '<td><a>' + product['name'] + '</a></td>\n' +
            '<td><h4>' + parseInt(product['price']).toLocaleString() + ' VNĐ</h4></td>\n' +
            '<td><input class="quantity" data-product-id="' + product['id'] + '" style="width: 30px; outline: none;" type="number" value="' + product['quantity'] + '" min="1"></td>\n' +
            '<td style="cursor: pointer;" class="delete-product" data-product-id="' + product['id'] + '">Xóa</td>\n' +
            '</tr>';
        jQuery('#products').append(html);
    }
}