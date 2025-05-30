<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css-style/dashboard-style.css">
    <link rel="stylesheet" href="css-style/public.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Dashboard Opak Coffee</title>
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
                        <a class="nav-link active mx-3" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" aria-current="page" href="/allmenu">All Menu</a>
                    </li>

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Search -->
    <div class="search">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <!-- End Search -->

    <!-- Promotion -->
    <div class="promotion">
        <header>
            <h2>
                Promotion
            </h2>
        </header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Asset\diskon\eugenia-pankiv-6HaeFch0OaU-unsplash(1)(1).jpg" class="d-block w-100"
                        alt="Diskon 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Croisant</h5>
                        <p>Diskon 50%</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Asset\diskon\keith-tanner-Y950vg9rtkE-unsplash(1)(2).jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Asset\diskon\shayan-rostami-R4O38kNBSvs-unsplash(1)(1).jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- End Promotion -->

    <!-- Recomendasi -->
    <div class="rekomendasi">
        <div class="container">
            <h2>Rekomendasi</h2>
            <div class="rekomendasi-container">
                <!-- Item 1 -->
                <div class="rekomendasi-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#menuModal">
                        <figure>
                            <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                        </figure>

                        <div class="menu-info">
                            <h3>Assorted Pastries</h3>
                            <p class="price">Rp 35.000</p>
                        </div>
                    </a>
                </div>

                <!-- Item 2 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Latte Art</h3>
                        <p class="price">Rp 28.000</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Green Tea</h3>
                        <p class="price">Rp 25.000</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Grilled Sandwich</h3>
                        <p class="price">Rp 45.000</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Berry Pancakes</h3>
                        <p class="price">Rp 42.000</p>
                    </div>
                </div>

                <!-- Item 6 (will wrap to next line) -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Fresh Salad</h3>
                        <p class="price">Rp 38.000</p>
                    </div>
                </div>

                <!-- Item 7 (will wrap to next line) -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Smoothie Bowl</h3>
                        <p class="price">Rp 40.000</p>
                    </div>
                </div>

                <!-- Item 8 (will wrap to next line) -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Avocado Toast</h3>
                        <p class="price">Rp 39.000</p>
                    </div>
                </div>

                <!-- Item 9 (will wrap to next line) -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Pasta Dish</h3>
                        <p class="price">Rp 55.000</p>
                    </div>
                </div>

                <!-- Item 10 (will wrap to next line) -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Fruit Platter</h3>
                        <p class="price">Rp 48.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recomendasi -->

    <!-- Makanan -->
    <div class="makanan">
        <div class="container">
            <h2>Makanan</h2>
            <div class="rekomendasi-container">
                <!-- Item 1 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>

                    <div class="menu-info">
                        <h3>Assorted Pastries</h3>
                        <p class="price">Rp 35.000</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Latte Art</h3>
                        <p class="price">Rp 28.000</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Green Tea</h3>
                        <p class="price">Rp 25.000</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Grilled Sandwich</h3>
                        <p class="price">Rp 45.000</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Berry Pancakes</h3>
                        <p class="price">Rp 42.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="minuman">
        <div class="container">
            <h2>Minuman</h2>
            <div class="rekomendasi-container">
                <!-- Item 1 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>

                    <div class="menu-info">
                        <h3>Assorted Pastries</h3>
                        <p class="price">Rp 35.000</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Latte Art</h3>
                        <p class="price">Rp 28.000</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Green Tea</h3>
                        <p class="price">Rp 25.000</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Grilled Sandwich</h3>
                        <p class="price">Rp 45.000</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="rekomendasi-item">
                    <figure>
                        <img src="/Asset/about/kopi1.jpg" alt="Assorted pastries and desserts">
                    </figure>
                    <div class="menu-info">
                        <h3>Berry Pancakes</h3>
                        <p class="price">Rp 42.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Makanan-->


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

    <div class="cart-icon">
        <a href="/cart" class="btn position-relative">
            <i class="bi bi-cart3"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                id="cartBadge">0</span>
        </a>
    </div>


    <footer>
        <p> &copy; 2025 Opak Coffe. All rights reserved.</p>
    </footer>

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