// Fungsi untuk memperbarui Order Details dengan produk dari localStorage
function updateOrderDetails() {
    // Ambil data keranjang dari localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let orderProducts = document.getElementById('order-products');
    let orderTotal = document.getElementById('order-total');
    let totalPrice = 0;

    // Bersihkan daftar produk sebelumnya
    orderProducts.innerHTML = '';

    // Loop melalui setiap item di keranjang dan tampilkan produk
    cart.forEach(item => {
        let productRow = document.createElement('div');
        productRow.classList.add('order-col');
        productRow.innerHTML = `
            <div>${item.quantity}x ${item.name}</div>
            <div>Rp.${(item.quantity * item.price).toLocaleString()}</div>
        `;
        orderProducts.appendChild(productRow);

        // Tambahkan total harga
        totalPrice += item.quantity * item.price;
    });

    // Perbarui total harga
    orderTotal.textContent = `Rp.${totalPrice.toLocaleString()}`;
}

// Panggil fungsi untuk memperbarui Order Details saat halaman dimuat
updateOrderDetails();
