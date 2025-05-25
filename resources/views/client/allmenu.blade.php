<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Opak Coffee</title>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css-style/allmenu.css">
    <link rel="stylesheet" href="css-style/public.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-dark" style="background-color: #634832">
        <div class="container">
            <a class="navbar-brand fw-bold fs-2 " href="#">OpakCoffee</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item home1">
                        <a class="nav-link mx-3" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-3" href="#allmenu">All Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="mt-5 pt-5">
        <div class="container content">
            <div class="kategori mb-3">
                <select class="form-select mt-3" id="kategoriSelect">
                    <option selected>Kategori</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </div>

            <div class="menu">
                <div class="menu-item">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Minuman -->
                            <tr data-kategori="Minuman">
                                <td>1</td>
                                <td><img src="asset/about/kopi1.jpg" class="img-thumbnail" width="130px" alt="..."></td>
                                <td>Coffee Latte</td>
                                <td>Rp. 15.000</td>
                                <td><button class="btn" data-bs-toggle="modal" data-bs-target="#menuModal"><i class="bi bi-plus-circle-fill"></i></button></td>
                            </tr>

                            <!-- Makanan -->
                            <tr data-kategori="Makanan">
                                <td>2</td>
                                <td><img src="asset/about/makanan1.jpg" class="img-thumbnail" width="130px" alt="..."></td>
                                <td>Roti Bakar</td>
                                <td>Rp. 10.000</td>
                                <td><button class="btn" data-bs-toggle="modal" data-bs-target="#menuModal"><i class="bi bi-plus-circle-fill"></i></button></td>
                            </tr>

                            <!-- Minuman -->
                            <tr data-kategori="Minuman">
                                <td>3</td>
                                <td><img src="asset/about/kopi2.jpg" class="img-thumbnail" width="130px" alt="..."></td>
                                <td>Espresso</td>
                                <td>Rp. 13.000</td>
                                <td><button class="btn"><i class="bi bi-plus-circle-fill"></i></button></td>
                            </tr>

                            <!-- Makanan -->
                            <tr data-kategori="Makanan">
                                <td>4</td>
                                <td><img src="asset/about/makanan2.jpg" class="img-thumbnail" width="130px" alt="..."></td>
                                <td>Kentang Goreng</td>
                                <td>Rp. 12.000</td>
                                <td><button class="btn"><i class="bi bi-plus-circle-fill"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Coffee Latte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="img-menu">
                        <img src="Asset/about/kopi1.jpg" class="img-thumbnail" alt="...">
                        <div class="info-menu">
                            <div class="nama-menu">Coffe Latte</div>
                            <div class="harga-menu">15.000</div>
                        </div>
                    </div>
                    <hr>
                    <div class="deskripsi-menu">
                        <h6>Suhu & Ukuran</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="size" id="cold1" value="Cold Regular">
                            <label class="form-check-label" for="cold1">Cold Regular</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="size" id="cold2" value="Cold Medium"
                                checked>
                            <label class="form-check-label" for="cold2">Cold Medium</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="size" id="cold3" value="Cold Large">
                            <label class="form-check-label" for="cold3">Cold Large</label>
                        </div>

                        <hr>
                        <h6>Gula</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sugar" id="sugar1" value="No Sugar">
                            <label class="form-check-label" for="sugar1">No Sugar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sugar" id="sugar2" value="Normal Sugar"
                                checked>
                            <label class="form-check-label" for="sugar2">Normal Sugar</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="sugar" id="sugar3" value="Extra Sugar">
                            <label class="form-check-label" for="sugar3">Extra Sugar</label>
                        </div>
                    </div>
                    <div class="aksi">
                        <div class="d-flex align-items-center mb-3">
                            <button class="btn me-2" onclick="decrement()"><i class="bi bi-dash-circle"></i></button>
                            <span id="counter">1</span>
                            <button class="btn ms-2" onclick="increment()"><i class="bi bi-plus-circle-fill"></i></button>
                        </div>
                    </div>

                    <button class="btn w-100" style="background-color: #38220f;color: #ece0d1;"onclick="addToCart()">Tambah ke Keranjang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Icon -->
    <div class="cart-icon">
        <a href="/cart" class="btn position-relative">
            <i class="bi bi-cart3"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                id="cartBadge">0</span>
        </a>
    </div>

    <!-- JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Javascript/dashboard.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
