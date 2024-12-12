document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function() {
        const product = this.closest('.product');
        const productName = product.querySelector('.product-name a').textContent;
        const productPrice = product.querySelector('.product-price').textContent;
        const productImage = product.querySelector('.product-img img').src; // Ambil URL gambar produk

        // Tambahkan produk ke keranjang
        addToCart(productName, productPrice, productImage);
    });
});

const cart = [];

function addToCart(name, price, image) {
    const product = { name, price, image };
    cart.push(product);

    // Perbarui UI keranjang
    updateCartUI();

    alert(`${name} telah ditambahkan ke keranjang!`);
}

function updateCartUI() {
    const cartDropdown = document.querySelector('.cart-dropdown .cart-list');
    const cartSummary = document.querySelector('.cart-summary h5');
    const cartCount = document.querySelector('.header-ctn .qty');

    cartDropdown.innerHTML = ''; // Bersihkan isi sebelumnya
    let total = 0;

    cart.forEach(item => {
        const cartItem = `
            <div class="product-widget">
                <div class="product-img">
                    <img src="${item.image}" alt="${item.name}"> <!-- Tambahkan gambar produk -->
                </div>
                <div class="product-body">
                    <h3 class="product-name">${item.name}</h3>
                    <h4 class="product-price">${item.price}</h4>
                </div>
                <button class="delete"><i class="fa fa-close"></i></button>
            </div>
        `;
        cartDropdown.innerHTML += cartItem;

        // Tambahkan harga produk ke total
        total += parseFloat(item.price.replace(/[^\d]/g, ''));
    });

    cartSummary.textContent = `SUBTOTAL: Rp.${total}`;
    cartCount.textContent = cart.length;

    // Tambahkan listener untuk tombol hapus
    addDeleteListeners();
}

function addDeleteListeners() {
    document.querySelectorAll('.cart-dropdown .delete').forEach((button, index) => {
        button.addEventListener('click', function() {
            cart.splice(index, 1);
            updateCartUI();
        });
    });
}
