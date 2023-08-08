<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Telaga Pelemwatu</title>
    {{-- <link href="preconnect" href="https://fonts.googleapis.com">/ --}}
    {{-- <link rel="icon" type="image/png" href="image/favicon.png"> --}}
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">


    <!-- Bootstrap -->
    {{-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> --}}



    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/DataTables/datatables.css">


    <!-- AOS -->
    <link rel="stylesheet" href="../assets/dist/aos.css">



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar">
        <a href="/" class="navbar-logo">Telaga<span>Pelemwatu</span>.</a>

        <div class="navbar-nav">
            <a href="/">Home</a>
            <a href="/post">Berita</a>
            <a href="/menu">Wahana</a>
            <a href="/contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>

        </div>

        <!-- Search Form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form end -->


        <div class="action" onclick="actionToggle();">
            {{-- <span>+</span> --}}
            <img style="padding: 18%" src="../assets/img/chat.png">
            <ul>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=089612681747&text=.....">
                        <img style="width: 12%" src="../assets/img/waicon.png">
                        Untuk Reservasi
                    </a>
                </li>

            </ul>
        </div>


    </nav>
    {{-- <video class="slider" autoplay="true">
        <source src="../assets/video/profile.mp4" type="video/mp4" />
        Browsermu tidak mendukung tag ini, upgrade donk!
    </video> --}}
    <!-- Navbar end -->

    <!-- Hero Section start -->
    @yield('content')

    <!-- Hero Section end -->

    <!-- About Section start -->
    <!-- <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih kopi kami?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et, voluptatum
          accusantium!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo cum
          voluptates molestias nihil.</p>
      </div>
    </div>
  </section> -->
    <!-- About Section end -->

    <!-- Menu Section start -->
    <!-- <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum.
    </p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
    </div>
  </section> -->
    <!-- Menu Section end -->

    <!-- Products Section start -->
    {{-- @yield('content') --}}
    <!-- Products Section end -->

    <!-- Contact Section start -->

    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="https://www.instagram.com/desawisatapelemwatu/?igshid=MzRlODBiNWFlZA%3D%3D"><img
                    src="../assets/img/instagram.png"></i></a>
            <a href="https://api.whatsapp.com/send?phone=089612681747&text=.....
              "><img
                    src="../assets/img/whatsapp.png"></i></a>
            <a href="https://www.facebook.com/p/Wisata-Telaga-Pelemwatu-100082999673861/"><img
                    src="../assets/img/facebook.png"></i></a>
        </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="/post">Berita</a>
            <a href="/menu">Menu</a>
            <a href="/contact">Kontak</a>
        </div>

        <div class="credit">
            <p><a>TI UWP</a> | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    {{-- <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content">
                <img src="img/products/1.jpg" alt="Product 1">
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis
                        obcaecati
                        ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus
                        voluptatibus!</p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal Box Item Detail end -->

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My Javascript -->
    <script src="../assets/js/script.js"></script>
    <!-- My Javascript -->
    <script src="../assets/dist/aos.js"></script>

    <script>
        AOS.init()
    </script>

    {{-- <script src="../assets/DataTables/datatables.js"></script>
    <script src="../assets/DataTables/Responsive-2.5.0/js/dataTables.responsive.js"></script>
    <script src="public/assets/DataTables/jQuery/jquery-3.7.0.js"></script> --}}



</body>

</html>
