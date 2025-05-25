<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembayaran</title>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #634832;
            color: #fff;
        }
        .receipt-container {
            background-color: #f4e8d4;
            color: #000;
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .nota-info{
            margin-top: 50px;
            margin: auto;
            text-align: center;
        }
        .check i{
            font-size: 12rem;
        }
        .text1{
            font-size: 1.7rem;
            font-weight: bold;
        }
        .btn{
            background-color: #3e2723;
            color: #ece0d1;
        }
        .btn:hover{
            border: 2px solid #3e2723 ;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="nota-info">
            <div class="check"><i class="bi bi-check-circle-fill"></i></div>
            <div class="text1">Pesanan Anda Telah Kami Terima</div>
            <div class="text2">Mohon Ditunggu Pesanan Anda</div>
        </div>
    <div class="receipt-container">
        
        <h3 class="text-center mb-4">Nota Pembayaran</h3>
        <p><strong>Nama:</strong> <span id="notaNama"></span></p>
        <p><strong>Jenis Pesanan:</strong> <span id="notaJenis"></span></p>
        <p><strong>Metode Pembayaran:</strong> <span id="notaMetode"></span></p>
        <p><strong>Nomor Meja:</strong> <span id="notaMeja"></span></p>

        <hr>

        <h5>Detail Pesanan:</h5>
        <div id="notaItems"></div>

        <hr>
        <h4 class="text-end">Total: Rp <span id="notaTotal"></span></h4>

        <div class="text-center mt-4">
            <a href="/dashboard" class="btn">Kembali ke Menu</a>
        </div>
    </div>
</div>

<script>
    const data = JSON.parse(localStorage.getItem('nota'));
    if (!data) {
        alert("Data nota tidak ditemukan.");
        window.location.href = "/dashboard";
    }

    document.getElementById('notaNama').textContent = data.nama;
    document.getElementById('notaJenis').textContent = data.jenis;
    document.getElementById('notaMetode').textContent = data.metode;
    document.getElementById('notaMeja').textContent = data.meja;

    const itemsContainer = document.getElementById('notaItems');
    data.items.forEach(item => {
        const el = document.createElement('div');
        el.innerHTML = `
            <p><strong>${item.name}</strong><br>
            Ukuran: ${item.size}, Gula: ${item.sugar}, Qty: ${item.quantity}<br>
            Subtotal: Rp ${item.total.toLocaleString()}</p>
        `;
        itemsContainer.appendChild(el);
    });

    document.getElementById('notaTotal').textContent = data.total.toLocaleString();
</script>
</body>
</html>
