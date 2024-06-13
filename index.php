<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PerpustakaanKu</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700&display=swap"
      rel="stylesheet"
    />

    <!-- feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="assets/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Perpustakaan<span>Ku</span>.</a>

      <div class="navbar-nav">
        <a href="index.html">Beranda</a>
        <div class="nav-item-with-dropdown">
          <a href="#Profil"
            >Profil
            <i class="fa-solid fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="">Sejarah</a></li>
            <li><a href="Visi dan Misi.html">Visi Misi</a></li>
            <li><a href="Profil perpustakaan.html">Kerja Sama</a></li>
          </ul>
        </div>
        <div class="nav-item-with-dropdown">
          <a href="#layanan"
            >Layanan
            <i class="fa-solid fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="Layanan/Sirkulasi.html">Sirkulasi</a></li>
            <li><a href="Form Formulir Pendaftaran.html">Keanggotaan</a></li>
          </ul>
        </div>
        <a href="#Koleksi">Koleksi</a>
        <a href="#TentangKami">Tentang Kami</a>
        <a href="#Kontak">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="book"><i data-feather="book"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero Section Start -->
    <!-- untuk image yang lebih lebar dan luas -->
    <section class="hero" id="Beranda">
      <!-- Hero Section End -->

      <div class="main">
        <div class="main_tag">
          <h1>Selamat datang di <br /><span>PerpustakaanKu</span></h1>

          <p>
            Selamat datang di ruang pengetahuan yang tak terbatas! Di
            perpustakaan ini, kita tidak hanya memiliki rak-rak penuh dengan
            buku, tetapi juga cerita-cerita yang menunggu untuk ditemukan.
            Setiap halaman adalah jendela menuju dunia baru, setiap kata adalah
            petualangan yang menanti.
            <br />Terima kasih telah datang dan mari kita mulai petualangan baru
            kita bersama di dunia literasi yang tak terbatas ini! Selamat
            membaca!
          </p>
          <a href="#" class="main_btn">Berkunjung</a>
        </div>

        <div class="main_img">
          <img src="img/table.png" />
        </div>
      </div>
    </section>

    <!-- Pameran Buku -->

    <div class="featured_boks">
      <h1>Pameran Buku</h1>

      <div class="featured_book_box">
        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 1.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Ichsan Malik</p>
            <div class="categories">Kategori: Ilmu Sosial</div>
            <p class="penerbit">Penerbit: PBK</p>
            <p class="ISBN">ISBN: 9786024123017</p>
            <a href="admin/buku1.html" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 2.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Peter Schweizer</p>
            <div class="categories">Kategori: Biografi</div>
            <p class="penerbit">Penerbit: Harper Collins Us</p>
            <p class="ISBN">ISBN: 9780063061149</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 5.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Jill Robinson</p>
            <div class="categories">Kategori: Misteri, Kisah Cinta</div>
            <p class="penerbit">Penerbit: Harper Collins</p>
            <p class="ISBN">ISBN: SCOOPG55727</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 4.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Tim Redaksi</p>
            <div class="categories">Kategori: Musik, Politik</div>
            <p class="penerbit">Penerbit: BINEKSOS</p>
            <p class="ISBN">ISBN: 9770301626001</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 8.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Takeyuki Sato</p>
            <div class="categories">Kategori: fiksi</div>
            <p class="penerbit">Penerbit: Elex Media Komputindo</p>
            <p class="ISBN">ISBN: 9786230014383</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 6.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Wisnu Nugroho</p>
            <div class="categories">Kategori: Fiksi, Kehidupan</div>
            <p class="penerbit">Penerbit: Kepustakaan Populer Gramedia</p>
            <p class="ISBN">ISBN: 9786024818517</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 7.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Allan & Barbara Pease</p>
            <div class="categories">Kategori: Psikologi</div>
            <p class="penerbit">Penerbit: Gramedia Pustaka Utama</p>
            <p class="ISBN">ISBN: 9786020388205</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 9.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Arumi Ekowati</p>
            <div class="categories">Kategori: Fiksi</div>
            <p class="penerbit">Penerbit: Gramedia Pustaka Utama</p>
            <p class="ISBN">ISBN: 9786020320106</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 10.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Agus Dwihandoyo</p>
            <div class="categories">Kategori: Teknologi Informasi</div>
            <p class="penerbit">Penerbit: Bumi Aksara</p>
            <p class="ISBN">ISBN: 9786022175667</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku 3.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Nani Nurrachman Sutojo</p>
            <div class="categories">Kategori: Psikologi, Sosial</div>
            <p class="penerbit">Penerbit: PBK</p>
            <p class="ISBN">ISBN: 9786233467186</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku21.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Gatut Susanta</p>
            <div class="categories">Kategori: Desain Interior</div>
            <p class="penerbit">Penerbit: Griya Kreasi</p>
            <p class="ISBN">ISBN: 9789796612239</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>

        <div class="featured_book_card">
          <div class="featurde_book_img">
            <img src="img/buku20.jpg" />
          </div>

          <div class="featurde_book_tag">
            <p class="penulis">Penulis: Imelda Akmal</p>
            <div class="categories">Kategori: Desain Interior</div>
            <p class="penerbit">Penerbit: Gramedia Pustaka Utama</p>
            <p class="ISBN">ISBN: 9789792228564</p>
            <a href="#" class="f_btn">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Pameran Buku end -->

    <!-- about section start-->

    <section id="TentangKami" class="TentangKami">
      <h2>Tentang Kami</h2>

      <div class="row">
        <div class="TentangKami-img">
          <img src="img/about.png" alt="Tentang Kami" />
        </div>

        <div class="content">
          <h3>Kenapa Harus Berkunjung?</h3>
          <p>
            Apakah Anda mencari tempat yang menawarkan lebih dari sekadar buku?
            Kami di Perpustakaan<span>Ku</span> memiliki apa yang Anda butuhkan
            untuk memuaskan dahaga pengetahuan dan pengalaman belajar Anda!
          </p>

          <p>
            Dari klasik sastra hingga yang terbaru dalam ilmu pengetahuan, kami
            memiliki koleksi buku yang beragam untuk memenuhi setiap minat dan
            keinginan. Tidak hanya itu, kami juga menawarkan majalah, jurnal,
            dan media lainnya yang selalu diperbarui untuk memastikan Anda tetap
            terhubung dengan perkembangan terbaru di berbagai bidang.
          </p>

          <p>
            Rasakan ketenangan dan inspirasi di ruang baca kami yang nyaman.
            Dengan suasana yang tenang dan penuh cinta untuk belajar, Anda akan
            menemukan diri Anda tenggelam dalam dunia buku tanpa gangguan dari
            kehidupan sehari-hari.
          </p>
        </div>
      </div>
    </section>

    <!-- about section end-->

    <!-- kontak kami start -->

    <section id="Kontak" class="Kontak">
      <h2>Kontak Kami</h2>
      <p>
        Hubungi Kontak kami dibawah ini, Kami siap membantu setiap keluh kesah
        anda!
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.121372426695!2d98.65464837248531!3d3.559509750498249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031304bd6005d07%3A0x8e0e5e2d03fa7983!2sUniversity%20of%20Sumatera%20Utara%20Library!5e0!3m2!1sen!2sid!4v1714321284971!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>

    <!-- kontak kami end -->

    <!-- footer start -->
    <footer>
      <div class="sosials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#Beranda">Beranda</a>
        <a href="#Profil">Profil</a>
        <a href="#layanan">Layanan</a>
        <a href="#Koleksi">Koleksi</a>
        <a href="#TentangKami">Tentang Kami</a>
        <a href="#Kontak">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">RaihanMunthe</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!-- footer end -->
    <footer></footer>
    <!-- Feather Icon -->

    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
