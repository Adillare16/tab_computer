// Fungsi untuk menambahkan produk ke keranjang dan menyimpannya ke localStorage
function addToCart(productName, productPrice, quantity) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Cek apakah produk sudah ada di keranjang
    let productIndex = cart.findIndex(item => item.name === productName);
    if (productIndex !== -1) {
        // Jika produk sudah ada, tambahkan kuantitasnya
        cart[productIndex].quantity += quantity;
    } else {
        // Jika produk baru, tambahkan produk ke dalam array
        cart.push({ name: productName, price: productPrice, quantity: quantity });
    }

    // Simpan kembali data keranjang ke localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}
