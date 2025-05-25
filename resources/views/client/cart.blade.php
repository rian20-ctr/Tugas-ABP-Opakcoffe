<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css-style/cart.css">
    <link rel="stylesheet" href="css-style/public.css">
</head>

<body>
    <div class="container mt-4">
        <a href="/dashboard" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left"></i> Kembali ke Menu
        </a>
        <h2>Keranjang Belanja</h2>
        <div class="form-data">
            <form>
                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="formNama" placeholder="Masukan Nama Anda">
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Makan Di Tempat?</option>
                    <option value="1">Dine in</option>
                    <option value="2">Take Away</option>
                </select>
                <select class="form-select mt-3" aria-label="Default select example">
                    <option selected>Masukan Metode Pembayaran</option>
                    <option value="1">Transfer</option>
                    <option value="2">Tunai</option>
                </select>
                <input type="number" class="form-control mt-3" id="angka" name="angka" placeholder="Masukan Nomer Meja" min="0" max="15"
                    step="1" />
                <div class="form-text">Masukkan nomer meja anda sesuai meja yang anda tempati.</div>
            </form>
        </div>
        <div id="cartItems"></div>
        <div id="emptyCart"  class=" text-center my-5">Anda Belum Memesan Menu</div>
        <div id="cartSummary" class="mt-4" style="display: none;">
            <h4 id="totalPrice">Total: Rp 0</h4>
            <button class="btn w-100 mt-3" onclick="checkout()">Checkout</button>
        </div>
    </div>

    <script src="{{ asset('Javascript/dashboard.js') }}"></script>

    <script>
        const inputAngka = document.getElementById('angka');

        inputAngka.addEventListener('input', () => {
            if (inputAngka.value === '0') {
                inputAngka.value = ''; // kosongkan input
                inputAngka.placeholder = 'Masukan nomer meja';
            } else if (inputAngka.value === '') {
                inputAngka.placeholder = '0';
            }
        });

        function checkout() {
    if (cart.length === 0) {
        alert("Keranjang kosong.");
        return;
    }

    const nama = document.getElementById("formNama").value;
    const jenis = document.querySelectorAll("select")[0].value;
    const metode = document.querySelectorAll("select")[1].value;
    const meja = document.getElementById("angka").value;

    if (!nama || jenis === "Makan Di Tempat?" || metode === "Masukan Metode Pembayaran" || (jenis === "1" && !meja)) {
        alert("Mohon lengkapi semua data.");
        return;
    }

    const total = cart.reduce((sum, item) => sum + item.total, 0);

    const notaData = {
        nama: nama,
        jenis: jenis === "1" ? "Dine In" : "Take Away",
        metode: metode === "1" ? "Transfer" : "Tunai",
        meja: meja || "-",
        items: cart,
        total: total
    };

    localStorage.setItem("nota", JSON.stringify(notaData));
    localStorage.setItem("cart", JSON.stringify([]));
    window.location.href = "/nota"; // ganti sesuai route Blade kamu
}

    </script>
    
</body>

</html>