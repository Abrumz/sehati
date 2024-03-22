<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyLaundry</title>
  <link rel="shortcut icon" href="img/LogoSehati.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- <include headtags.html> -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>

<body>
  <main>
    <header id="header" style="background-color:#fffff;">
        <nav>
          <div class="container">
            <div class="logo">
            <a href="index.php"><img src="img/LogoSehati.png" style="top: 0; left: 0; width: 170px; height: 60px;">
                </a>
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#about">Tentang Kami</a>
                </li>
                <li>
                  <a href="#contact">Hubungi Kami</a>
                </li>
                <li>
                  <a href="#testimoni">Testimoni</a>
                </li>
                <li>
                  <a href="term.php">Syarat dan Ketentuan</a>
                </li>
                <li>
                <a href="login.php" class="active">Login</a>
                </li>
                <li>
                <a href="signup.php" class="active">Register</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
                <h1 class="header-title" style="align-self: stretch; font-family: Rubik; font-size: 64px; font-weight: 700;"> <Span style="color: var(--Color-Neutral-neutral-700, #353C46);"> Cara Sehat Paling Mudah</span> <Span style="color: var(--Color-Orange-orange-500, #E98F27);"> Tanpa Perlu Ribet!</span></h1>
                <p class="text" style="align-self: stretch; font-family: Nunito Sans; font-size: 24px; font-weight: 400; color: var(--Color-Neutral-neutral-500, #4B5563);">
                    Gak perlu lama. Buatlah janji temu dengan dokter Anda sekarang melalui Booking secara gratis!
                </p>
                <a href="index1.php" class="btn" style="background: var(--Color-Blue-blue-500, #4256A0);">Buat Janji Temu Sekarang</a>
                </div>

                <div class="column-2 image" style="">
                    <img src="./img/DoctorLogo.png" class="img-element z-index" alt="" />
                </div>


          </div>
        </div>
    <!-- <section class="services section" id="services"> -->
        <div class="container" data-aos="zoom-in">
          <div class="section-header">
            <h3 class="title" data-title="Yuk Cek">Apa Sih Kelebihan Kami?</h3>
            <!-- <p class="text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
              vero?
            </p> -->
            <section class="records" style="background: none;">
           <div class="container" >
        <div class="wrap" data-aos="fade-up-right">
          <div class="record-circle">
            <img src="img/dompet.png">
            <!-- <h5 class="sub-title">Projects</h5> -->
          </div>
          <h1 class="sub-title"><span style="font-weight:bold;">Harganya Murah</h1>
        </div>

        <div class="wrap" data-aos="fade-up">
          <div class="record-circle">
          <img src="img/kartu.png">
            <!-- <h4 class="sub-title">Happy Clients</h4> -->
          </div>
          <h1 class="sub-title"><span style="font-weight:bold;">Bayarnya Mudah</h1>
        </div>

        <div class="wrap" data-aos="fade-up">
          <div class="record-circle">
            <img src="img/waktu.png">
            <!-- <h1 class="sub-title"><span style="font-weight:bold;">Pengerjaan Cepat</h1> -->
          </div>
          <h1 class="sub-title"><span style="font-weight:bold;">Pengerjaan Cepat</h1>
        </div>

        <div class="wrap" data-aos="fade-up-left">
          <div class="record-circle">
          <img src="img/mesin.png">
            <!-- <h4 class="sub-title">Awards</h4> -->
          </div>
          <h1 class="sub-title"><span style="font-weight:bold;">Mesin Yang Handal</h1>
        </div>
      </div>
    </section>
          </div>

          

          <section class="about section" id="about">
  <div class="container"data-aos="fade-up">
    <div class="section-header">
      <h3 class="title" data-title="Yuk Cek">Tentang Kami</h3>
    </div>
    <!-- <div class="container-body grid-2">
  <div class="column-1"> -->
  <div style="text-align:center;">
  <img src="./img/shapes/points4.png" class="points" alt="" />
  <img src="./img/LogoSehati.png" class="z-index" alt="" />
    <p class="text" style="text-align: justify">
    MyLaundry adalah sebuah website yang menyediakan layanan laundry online dengan mesin cuci dan pengering terbaik serta bahan pembersih yang aman dan berkualitas. Website ini didesain khusus untuk melayani kebutuhan laundry dari pengguna yang tidak memiliki waktu atau kesempatan untuk mencuci pakaian sendiri. Pengguna bisa memilih layanan yang diinginkan mulai dari pencucian pakaian, pengeringan, hingga penyeterikaan. MyLaundry menawarkan harga yang terjangkau dan diskon yang menarik bagi pengguna yang sering menggunakan layanannya. Layanan laundry online ini sangat cocok bagi pengguna yang memiliki jadwal padat dan tidak sempat mencuci pakaian sendiri seperti pekerja kantoran, mahasiswa, atau ibu rumah tangga yang sibuk. Dengan MyLaundry, pengguna tidak perlu repot-repot mencuci pakaian sendiri dan bisa menghemat waktu serta tenaga.
    </p>
    <div style="text-align: center;">
        <a class="btn" href="registrasi.php">Daftar Sekarang</a>
    </div>
  </div>

  <!-- <div class="column-2 image">
    <img src="./img/shapes/points4.png" class="points" alt="" />
    <img src="./img/LogoSehati.png" class="z-index" alt="" />
  </div> -->
</div>
 </div>
</section>
    <!-- <section class="about section" id="about">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="Who Am I">About me</h3>
        </div>

        <div class="container-body grid-2">
          <div class="column-1">
            <h3 class="title-sm">Hello, I'm</h3>
            <p class="text">
            MyLaundry adalah sebuah website yang menyediakan layanan laundry online untuk memudahkan pengguna dalam mencuci pakaian. Website ini didesain khusus untuk melayani kebutuhan laundry dari pengguna yang tidak memiliki waktu atau kesempatan untuk mencuci pakaian sendiri. Dengan MyLaundry, pengguna dapat memilih layanan yang diinginkan, mulai dari pencucian pakaian, pengeringan, hingga penyeterikaan.
            </p>
            <p class="text">
            MyLaundry menjamin kualitas layanan yang tinggi dengan menggunakan mesin cuci dan pengering terbaik serta bahan pembersih yang aman dan berkualitas. Selain itu, website ini juga menawarkan harga yang terjangkau dan diskon yang menarik untuk pengguna yang sering menggunakan layanannya.
            </p>
            <p class="text">
            Dengan MyLaundry, pengguna tidak perlu repot-repot mencuci pakaian sendiri dan bisa menghemat waktu serta tenaga. Layanan laundry online dari MyLaundry ini sangat cocok untuk pengguna yang memiliki jadwal yang padat dan tidak sempat mencuci pakaian sendiri, seperti pekerja kantoran, mahasiswa, atau ibu rumah tangga yang sibuk.
            </p>

          <div class="column-2 image">
            <img src="./img/shapes/points4.png" class="points" alt="" />
            <img src="./img/LogoSehati.png" class="z-index" alt="" />
          </div>
        </div>
      </div>
    </section> -->

    

    <section class="blog section" id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="title" data-title="Last News">Hubungi Kami</h3>
          <p class="text">
            Jika anda memiliki pertanyaan seputar produk kami, silakan hubungi kami melalui kontak di bawah ini.
          </p>
        </div>

        <div class="container" data-aos="fade-up">
        <div class="contact-box">
          <div class="contact-info">
            <h3 class="title">Get in touch</h3>
            <p class="text">
              Outlet kami berada di lebih dari 1 daerah yang ada di Indonesia, namun hanya ada 1 kantor resmi kami.
            </p>
            <div class="information-wrap">
              <div class="information">
                <div class="contact-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <p class="info-text">Wing 20, Jl. Meranti Kampus IPB, Babakan, Kec. Dramaga, Kabupaten Bogor, Jawa Barat 16680</p>
              </div>

              <div class="information">
                <div class="contact-icon">
                  <i class="fas fa-paper-plane"></i>
                </div>
                <p class="info-text">hrd@mylaundry.com</p>
              </div>

              <div class="information">
                <div class="contact-icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <p class="info-text">123-456-789</p>
              </div>
            </div>
          </div>

          <div class="contact-form">
            <h3 class="title">Contact me</h3>
            <div class="row">
              <input type="text" class="contact-input" placeholder="First Name" />
              <input type="text" class="contact-input" placeholder="Last Name" />
            </div>

            <div class="row">
              <input type="text" class="contact-input" placeholder="Phone" />
              <input type="email" class="contact-input" placeholder="Email" />
            </div>

            <div class="row">
              <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
            </div>
            <a href="#" class="btn">Send</a>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="testimonials section" id="testimoni">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="title" data-title="APA YANG MEREKA KATAKAN">Testimoni</h3>
        </div>

        <div class="testi-content grid-2" data-aos="fade-up">
          <div class="column-1 reviews">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    "Saya terkesan dengan kualitas layanan <span
                      style="color:#356D65; font-weight:bold;">MyLaundry</span>. Mereka sangat ramah dan profesional
                    dalam mengambil dan mengantar cucian saya. Pakaian saya selalu dicuci dengan hati-hati dan hasilnya
                    sangat memuaskan. Saya pasti merekomendasikan <span
                      style="color:#356D65; font-weight:bold;">MyLaundry</span> kepada teman dan keluarga."
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Adolf Hitlaer</h3>
                    <h5 class="review-job">Ketua Partai Nazi</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    "Saya senang bisa mencuci baju di <span style="color:#356D65; font-weight:bold;">MyLaundry</span>,
                    selain membuat baju saya bersih saya juga akhirnya bisa mengakusisi Twitter berkat mencuci di <span
                      style="color:#356D65; font-weight:bold;">MyLaundry</span>."
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Elon Musk</h3>
                    <h5 class="review-job">CEO of Tesla</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    "Saya sangat puas dengan layanan <span style="color:#356D65; font-weight:bold;">MyLaundry</span>.
                    Cucian saya diambil dan diantar tepat waktu dengan hasil yang sangat bersih dan rapi. Harga yang
                    ditawarkan juga sangat terjangkau. Saya pasti akan menggunakan jasa <span
                      style="color:#356D65; font-weight:bold;">MyLaundry</span> lagi di masa depan."
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Barrack Obama</h3>
                    <h5 class="review-job">Mantan Presiden USA</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    "<span style="color:#356D65; font-weight:bold;">MyLaundry</span> adalah penyelamat hidup saya! Saya
                    tidak punya waktu untuk mencuci pakaian saya sendiri, tetapi <span
                      style="color:#356D65; font-weight:bold;">MyLaundry</span> membuat segalanya menjadi jauh lebih
                    mudah. Layanan mereka sangat cepat dan hasilnya selalu memuaskan. Saya pasti akan menggunakan
                    layanan <span style="color:#356D65; font-weight:bold;">MyLaundry</span> lagi dan lagi. Tadinya jika
                    saya tidak puas maka ownernya bakal saya kasih nuklir"
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Kim Jong Un</h3>
                    <h5 class="review-job">Supreme Leader of North Korea</h5>
                  </div>
                </div>
              </div>

              <div class="review-nav swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
              </div>
              <div class="review-nav swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
              </div>
            </div>
          </div>

          <div class="column-2 image">
            <img src="./img/capybara.gif" alt="" class="img-element" />
          </div>
        </div>
      </div>
    </section>

    <section class="hireme" id="hireme">
      <div class="container" data-aos="fade-up">
        <h3 class="title">Let's talk about a project</h3>
        <p class="text" style= "text-align: justify">
        Projek MyLaundry merupakan sebuah proyek tugas akhir yang dibuat oleh mahasiswa Departemen Ilmu Komputer IPB University sebagai bagian dari mata kuliah "Rekayasa Perangkat Lunak" pada semester 4. Proyek ini bertujuan untuk mengembangkan sebuah aplikasi pencucian pakaian yang dapat membantu pengguna dalam mengelola cucian mereka dengan lebih mudah dan efisien.
        </p>
        <p class="text" style="text-align: justify">
        Projek MyLaundry diharapkan dapat memberikan solusi bagi pengguna yang kesulitan mengatur jadwal mencuci pakaian mereka. Selain itu, aplikasi ini juga diharapkan dapat membantu meningkatkan kualitas layanan laundry dengan cara mempermudah dan mempercepat proses pencucian. Melalui proyek ini, mahasiswa Departemen Ilmu Komputer IPB University diharapkan dapat mengembangkan kemampuan dalam merancang, mengembangkan, dan menguji sebuah perangkat lunak secara mandiri.        </p>
        <a href="http://instagram.com/althaaf1601" class="btn">Hire me</a>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="grid-4">
        <div class="grid-4-col footer-about">
          <h3 class="title-sm">About</h3>
          <p class="text" style="text-align: justify">
          Projek MyLaundry merupakan sebuah proyek tugas akhir yang dibuat oleh Kelompok 9 Departemen Ilmu Komputer IPB University sebagai bagian dari mata kuliah "Rekayasa Perangkat Lunak" pada semester 4.
          </p>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Links</h3>
          <ul>
            <li>
              <a href="#header">Home</a>
            </li>
            <li>
              <a href="#about">Tentang Kami</a>
            </li>
            <li>
              <a href="#contact">Hubungi Kami</a>
            </li>
            <li>
              <a href="#testimoni">Testimoni</a>
              <li>
              <a href="term.php">Syarat dan Ketentuan</a>
            </li>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Services</h3>
          <ul>
            <li>
              <a href="#">Cuci</a>
            </li>
            <li>
              <a href="#">Setrika</a>
            </li>
            <li>
              <a href="#">Komplit</a>
            </li>
            <li>
              <a href="#">Pembayaran Cash</a>
            </li>
            <li>
              <a href="#">Cicilan 12x</a>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-newstletter">
          <h3 class="title-sm">Subscribe</h3>
          <p class="text">
            Anda butuh info nyeleneh terkait kami?
          </p>
          <div class="footer-input-wrap">
            <input type="email" class="footer-input" placeholder="Email" />
            <a href="#" class="input-arrow">
              <i class="fas fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="bottom-footer">
        <div class="copyright">
          <p class="text">
            Copyright&copy;2023 All rights reserved | Made by
            <span>Kelompok 9 RPL</span>
          </p>
        </div>

        <div class="followme-wrap">
          <div class="followme">
            <h3>Follow me</h3>
            <span class="footer-line"></span>
            <div class="social-media">
              <a href="http://instagram.com/althaaf1601">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="http://instagram.com/althaaf1601">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="http://instagram.com/althaaf1601">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="http://instagram.com/althaaf1601">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <div class="back-btn-wrap">
            <a href="#" class="back-btn">
              <i class="fas fa-chevron-up"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/app.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>