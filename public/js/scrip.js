jQuery(document).ready(function () {
    jQuery('.add-to-card').click(function () {
        let id = jQuery(this).parent().data('id');
        let name = jQuery(this).parent().data('name');
        let image = jQuery(this).parent().data('image');
        let price = jQuery(this).parent().data('price');
        let product = {
            id: id,
            name: name,
            image: image,
            price: price,
            quantity: 1,
        };

        if (checkProductExistInCart(id)) {
            increaseQuantity(id);
        } else {
            addProductToCart(product);
        }

    });
});

function increaseQuantity(productId, number = 0) {
    let cart = localStorage.getItem('cart');
    cart = JSON.parse(cart);
    for (let i = 0; i < cart.length; i++) {
        if (cart[i] && cart[i]['id'] === productId) {
            let quantity = cart[i]['quantity'];
            cart[i]['quantity'] = number ? number : (quantity + 1);
        }
    }
    localStorage.setItem('cart', JSON.stringify(cart));
}

function addProductToCart(product) {
    let cart = localStorage.getItem('cart');
    cart = JSON.parse(cart);
    if (!cart) {
        cart = [];
    }
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));
}

function checkProductExistInCart(productId) {
    let cart = localStorage.getItem('cart');
    if (!cart) {
        return false;
    }

    cart = JSON.parse(cart);
    for (let i = 0; i < cart.length; i++) {
        if (cart[i] && cart[i]['id'] === productId) {
            return true;
        }
    }
    return false;
}