<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi Katalis</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">


  <!--AlpineJS-->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!--app-->
  <!-- <script src="js/script.js"></script> -->
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar" x-data>
    <a href="#" class="navbar-logo">Kopi<span>Katalis</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button">
        <i data-feather="shopping-cart"></i>
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity">30</span>
      </a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/aren latte.jpeg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/aren latte.jpeg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/aren latte.jpeg" alt="Product 1">
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->
  </nav>
  <!-- Navbar end -->

<!-- Hero Section start -->
<section class="hero" id="home">
  <div class="mask-container">
    <main class="content">
      <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
      <a href="#" class="cta">Beli Sekarang</a>
    </main>
  </div>
</section>
<!-- Hero Section end -->
  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="tentang-kami.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih kopi kami?</h3>
        <p>Kaki Mamah Wangi!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo cum
          voluptates molestias nihil.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu" x-data="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Selamat datang di Kedai Kopi kami, tempat di mana rasa dan aroma berpadu sempurna untuk memberikan Anda pengalaman kopi yang tak terlupakan. Kami dengan bangga mempersembahkan berbagai pilihan minuman yang disiapkan dengan cinta dan perhatian terhadap detail. Berikut adalah beberapa dari menu andalan kami:
    </p>

    <div class="row">
      <template x-for="(item, index) in items" x-key="index">
        <div class="menu-card">
          <div class="menu-icons">
          <a href="#" @click="$store.cart.add(item)">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 6h15l-1.5 9H6z"/>
                <circle cx="9" cy="20" r="1"/>
                <circle cx="18" cy="20" r="1"/>
                <path d="M6 6L5 4H2"/>
              </svg>
            </a>
          </div>
          <img :src="item.img" :alt="item.name" class="menu-card-img">
          <h3 class="menu-card-title" x-text="item.name"></h3>
          <p class="menu-card-price" x-text="`Rp${item.price}`"></p>
        </div>
      </template>
    </div>
  </section>
    
  <!-- Menu Section end -->
<!-- Contact Section start -->
<section id="contact" class="contact">
  <h2><span>Kontak</span> Kami</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.</p>

  <div class="row">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

    <form action="">
      <div class="input-group">
        <i data-feather="user"></i>
        <input type="text" placeholder="Nama" required>
      </div>
      <div class="input-group">
        <i data-feather="mail"></i>
        <input type="email" placeholder="Email" required>
      </div>
      <div class="input-group">
        <i data-feather="phone"></i>
        <input type="tel" placeholder="No HP" required>
      </div>
      <div class="input-group">
        <i data-feather="message-circle"></i>
        <textarea placeholder="Pesan" required></textarea>
      </div>
      <button type="submit" class="btn">Kirim Pesan</button>
    </form>
  </div>
</section>
<!-- Contact Section end -->

  <!-- Footer start -->
  <footer>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
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
  </div>
  <!-- Modal Box Item Detail end -->
  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>