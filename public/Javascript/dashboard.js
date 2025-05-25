let counterValue = 1;
let cart = JSON.parse(localStorage.getItem("cart")) || [];



// Untuk home.html
if (document.getElementById("counter")) {
    updateDisplay();
    updateCartBadge();
}

function increment() {
    counterValue++;
    updateDisplay();
}
function decrement() {
    if (counterValue > 1) {
        counterValue--;
        updateDisplay();
    }
}
function updateDisplay() {
    document.getElementById("counter").textContent = counterValue;
}
function updateCartBadge() {
    const badge = document.getElementById("cartBadge");
    if (badge) {
        const total = cart.reduce((sum, item) => sum + item.quantity, 0);
        badge.textContent = total;
    }
}

function addToCart() {
    const size = document.querySelector('input[name="size"]:checked').value;
    const sugar = document.querySelector('input[name="sugar"]:checked').value;

    const item = {
        id: Date.now(),
        name: "Coffee Latte",
        price: 15000,
        quantity: counterValue,
        size,
        sugar,
        total: 15000 * counterValue,
    };

    cart.push(item);
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("Item berhasil ditambahkan ke keranjang!");
    counterValue = 1;
    updateDisplay();
    updateCartBadge();
    

    // Menutup modal tanpa .hide()
    document.querySelector('#menuModal .btn-close').click();
}


// Untuk cart.html
if (document.getElementById("cartItems")) {
    renderCart();
}

function renderCart() {
    const container = document.getElementById("cartItems");
    const summary = document.getElementById("cartSummary");
    const empty = document.getElementById("emptyCart");

    if (cart.length === 0) {
        container.innerHTML = "";
        empty.style.display = "block";
        summary.style.display = "none";
        return;
    }

    empty.style.display = "none";
    summary.style.display = "block";

    container.innerHTML = cart.map(item => `
        <div class="card mb-3">
            <div class="card-body" style="background-color: #ece0d1; ">
                <h5 class="card-title">${item.name} - Rp ${item.total.toLocaleString()}</h5>
                <p class="card-text">
                    Ukuran: ${item.size}<br>
                    Gula: ${item.sugar}<br>
                    Qty: ${item.quantity}
                </p>
                <button class="btn btn-sm btn-danger" onclick="removeFromCart(${item.id})">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </div>
        </div>
    `).join("");

    const total = cart.reduce((sum, item) => sum + item.total, 0);
    document.getElementById("totalPrice").textContent = `Total: Rp ${total.toLocaleString()}`;
}

function removeFromCart(id) {
    cart = cart.filter(item => item.id !== id);
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
}

function checkout() {
    if (cart.length === 0) {
        alert("Keranjang kosong.");
        return;
    }
    if (confirm("Lanjutkan pembayaran?")) {
        alert("Terima kasih! Pesanan Anda sedang diproses.");
        cart = [];
        localStorage.setItem("cart", JSON.stringify(cart));
        renderCart();
    }
}



// Filter berdasarkan kategori
        document.getElementById('kategoriSelect').addEventListener('change', function () {
            const selected = this.value;
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const kategori = row.getAttribute('data-kategori');

                if (selected === 'Kategori' || selected === '') {
                    row.style.display = '';
                } else if (kategori === selected) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
