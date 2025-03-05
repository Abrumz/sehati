<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sehati</title>
	<link rel="icon" href="img/sehati-vector.png">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- end font -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- loader -->
	<div class="fakeLoader"></div>
	<!-- end loader -->
	<!-- navbar -->
	<nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top">
		<div class="container" style="display: flex; justify-content: space-between;">
			<a href="index.php" class="navbar-brand"><img src="img/LogoSehati.png" alt=""></a>
			<div class="navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="icon ion-ios-menu"></i>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="nav navbar-nav navbar-collapse" data-in="#" data-out="#" style="justify-content: center !important;">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Beranda</a>
					</li>
					<li class="nav-item dropdown" >
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
							Layanan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
							<a class="dropdown-item" href="login.php" >Booking</a>
							<a class="dropdown-item" href="login.php">Konsultasi</a>
							<a class="dropdown-item" href="mental-health">Mental Health </a>
						</div>
					</li>	
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Kontak Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Blog</a>
					</li>
					
				</ul>
					<div class="nav navbar-nav navbar-collapse" style="justify-content: center !important; gap: 16px; font-family: Nunito Sans;     justify-content: flex-end !important;" >
						<a href="login.php" class="button button-secondary">Masuk</a>
						<a href="signup.php" class="button">Daftar</a>
					</div>
			</div>
		</div>
	</nav>
	
	<!-- end navbar -->
	<!-- home intro -->
	<div id="home" class="home-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="content">
						<h2>Cara Sehat Paling Mudah</h2>
						<h2><span class="color-highlight">Tanpa Perlu Ribet</span></h2>
						<p class="text" style="align-self: stretch; font-family: 'Nunito Sans', sans-serif; font-size: 24px; font-weight: 400; color: var(--Color-Neutral-neutral-500, #4B5563); width: 80%;">
							Gak perlu lama. Buatlah janji temu dengan dokter Anda sekarang melalui Booking secara gratis!
						</p>
						<ul>
							<li><a href="login.php" class="button">Buat Jadwal Temu Sekarang</a></li>
							<!-- <li><a href="" class="button button-secondary">Free Trial</a></li> -->
						</ul>
						<h3> Kami telah bekerja sama dengan beberapa mitra kesehatan di Indonesia.</h3>
						<div class="container-box">
							<div class="box">
							  <img src="https://candle.or.id/wp-content/uploads/2021/09/Logo-kemenkes.png" alt="Kemenkes">
							</div>
							<div class="box">
							  <img src="https://seeklogo.com/images/B/bpjs-kesehatan-logo-B436CE3991-seeklogo.com.png" alt="BPJS">
							</div>
							<div class="box">
							  <img src="https://talent.usedeall.com/_next/static/media/halodoc.ef964788.png" alt="Halodoc">
							</div>
							<div class="box">
							  <img src="https://kartukredit.bri.co.id/public/uploads/merchant_logo/mayapada_hospital.png" alt="Mayapada">
							</div>
							<div class="box">
							  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhM3mqWedt-HV4Aitqpr9IU2zXWzTL8bS6tvexRNponz95yS1AqMXg30wJP28kEzyYxLw7Yetp0goPfBl9DWJqj-ngsoxmLbzulIcFTyHO2Zy0rF5IjnKG_0hOTKzO-0QSv6FLH5L_KWd-RbewpVDrV5qRmXoKCpLK79g_zuOPrDX6vhb9y_lcZe_GY/w1200-h630-p-k-no-nu/Logo%20Siloam%20Hospitals.png" alt="Siloam">
							</div>
						</div>
						  
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12" style="align-content: center;">
					<div class="content-image" style="scale: 1.3;">
						<img src="img/DoctorLogo.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home intro -->
	
	<!-- words -->
	<div class="line">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="counter-wrapper">
					  <div class="count-image">
						<img src="img/Body.png" alt="">
					  </div>
					  <div class="counter">
						<h1 class="count" data-target="457837">0</h1>
						<p>Orang terbantu melalui pelayanan yang cepat & mudah</p>
					  </div>
					</div>		
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="counter-wrapper">
					  <div class="count-image">
						<img src="img/Emergency.png" alt="">
					  </div>
					  <div class="counter">
						<h1 class="count" data-target="8546">0</h1>
						<p>Pengobatan telah terjadwal di setiap harinya</p>
					  </div>
					</div>		
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="counter-wrapper">
					  <div class="count-image">
						<img src="img/Healthcare.png" alt="">
					  </div>
					  <div class="counter">
						<h1 class="count" data-target="5532">0</h1>
						<p>Konsultasi kesehatan dilakukan secara online</p>
					  </div>
					</div>		
				</div>
				  
			</div>
		</div>
	</div>
	<!-- <div class="words-section section-bottom-only">
		<div class="container">
			<div class="content">
				<div class="row">
					
				</div>
			</div>
		</div>
	</div> -->
	<!-- end words -->
<!-- pelayananan intro -->
<div id="pelayanan" class="pelayanan-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="content-image">
					<img src="img/DocLap.png" alt="">
				</div>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="content">
					<h2>Pelayanan Kesehatan Mudah Bagi Semua Kalangan</h2>
					<p>Sehati adalah sebuah platform konsultasi online dengan dokter, yakni pengguna dapat mencari informasi tentang kondisi kesehatan, mendapatkan saran medis dari profesional terpercaya, dan membuat janji temu dengan dokter sesuai kebutuhan.</p>
				</div>
				<div class="container-box" style="justify-content:flex-start;">
					<div class="box">
						<h3>Ulasan Pasien</h3>
						<h4 class="count" data-target="95">0</h4>
						<div style="height: 8px; align-self: stretch; border-radius: 2px; background: var(--Color-Orange-orange-500, #E98F27);"></div>
					</div>					
					<div class="box">
						<h3>Pengalaman Dokter</h3>
						<h4 class="count" data-target="10">0</h4>
						<div style="height: 8px; align-self: stretch; border-radius: 2px; background: var(--Color-Blue-blue-500, #4256A0););"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end home intro -->
	
	<!-- Layanan Kami -->
	<div id="process-work" class="process-work section">
		<div class="container">
			<div class="section-title">
				<h3>Layanan Kami</h3>
				<h5>Kami memberikan layanan dengan memprioritaskan kebutuhan dan kenyamanan pasien untuk mendapatkan pengobatan yang mudah dan cepat.</h5>
			</div>
			<div class="row" style="justify-content: center; display: flex;">
				<div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
					<a href="login.php">
						<div class="content" style="margin: auto;">
						<img src="img/Janji.png" alt="">
						<h5>Buat Jadwal Temu</h5>
							<p>Jadwalkan pertemuan secara online dengan dokter sesuai kebutuhan Anda</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
					<a href="login.php">
						<div class="content" style="margin: auto;">
							<img src="img/cari.png" alt="">
							<h5>Konsultasi Dokter</h5>
							<p>Konsultasikan kesehatan Anda dengan dokter sesuai spesialisasi yang Anda kebutuhan</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
					<a href="mental-health">
						<div class="content" style="margin: auto;">
							<img src="img/medical.png" alt="">
							<h5>Mental Health</h5>
							<p>Kami menyediakan layanan pemeriksaan mental health untuk Anda</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end process work -->
	<!-- Rating -->
	<div id="Rating" class="services section-bottom-only">
		<div class="section-title">
			<h3>Ratusan Ribu Orang Sudah Terbantu</h3>
			<h4>Sudah banyak orang mengakui bahwa kehadiran Sehati sangat membantunya dalam pembuatan janji temu dengan dokter mereka.</h4>
			
		</div>
		<section id="slider">
			<input class="card-slider" type="radio" name="slider" id="s1">
			<input class="card-slider" type="radio" name="slider" id="s2">
			<input class="card-slider" type="radio" name="slider" id="s3" checked>
			<input class="card-slider" type="radio" name="slider" id="s4">
			<input class="card-slider"type="radio" name="slider" id="s5">
			<label for="s1" id="slide1" class="card-slider">
				<img src="img/Quote.png" alt="">
				<h1>“Saya sangat terbantu dengan adanya Sehati, karena mempermudah saya dalam membuat janji temu dengan dokter saya.”</h1>
				<div class="profile-card">
					<img src="img/profil3.png" alt="Profile Picture">
					<div class="profile-info">
						<h2>Revan Yulianto</h2>
						<p>Pasien Orthopedic</p>
						<h5 style="fill: var(--Color-Orange-orange-500, #E98F27) !important;">★★★★★</h5>
					</div>
				</div>
			</label>
			<label for="s2" id="slide2" class="card-slider">
				<img src="img/Quote.png" alt="">
				<h1>"Dulu, membuat janji temu dengan dokter bisa menjadi tugas yang melelahkan. Namun, berkat Sehati, semua jadi lebih mudah.”</h1>
				<div class="profile-card">
					<img src="img/profil1.png" alt="Profile Picture">
					<div class="profile-info">
						<h2>Dewi Sukma Wardani</h2>
						<p>Pasien Asam Lambung</p>
						<h5 style="fill: var(--Color-Orange-orange-500, #E98F27) !important;">★★★★★</h5>
					</div>
				</div>
			</label>
			<label for="s3" id="slide3" class="card-slider">
				<img src="img/Quote.png" alt="">
				<h1>“Sekarang, tidak perlu lagi menghabiskan waktu berjam-jam untuk membuat janji temu dengan dokter.”</h1>
				<div class="profile-card">
					<img src="img/profil2.png" alt="Profile Picture">
					<div class="profile-info">
						<h2>Ryan Sananta Farhanito</h2>
						<p>Pasien Kanker Pencernaan</p>
						<h5 style="fill: var(--Color-Orange-orange-500, #E98F27) !important;">★★★★★</h5>
					</div>
				</div>
				
			</label>
			<label for="s4" id="slide4" class="card-slider">
				<img src="img/Quote.png" alt="">
				<h1>"Saya ini susah tidur, semenjak ada klinik tong fang saya akhirnya bisa tidur dimana saja dan kapan saja, mantab”</h1>
				<div class="profile-card">
					<img src="img/adi.png" alt="Profile Picture">
					<div class="profile-info">
						<h2>Adi Satria</h2>
						<p>Pasien Pasien-an</p>
						<h5 style="fill: var(--Color-Orange-orange-500, #E98F27) !important;">★★★★★</h5>
					</div>
				</div>
			</label>
			<label for="s5" id="slide5" class="card-slider">
				<img src="img/Quote.png" alt="">
				<h1>"Dari dulu identitas saya diragukan, terutama jika saja sudah menginjak di praktikum PCD, warna saja jadi hilang”</h1>
				<div class="profile-card">
					<img src="img/melon.jpg" alt="Profile Picture">
					<div class="profile-info">
						<h2>Melon PCD</h2>
						<p>Pasien Minim Identitas</p>
						<h5 style="fill: var(--Color-Orange-orange-500, #E98F27) !important;">★★★★★</h5>
					</div>
				</div>
			</label>
		  </section>
	</div>
	<!-- end services -->
	
	<!-- contact -->
	<div id="contact" class="contact section-bottom-only">
		<div class="container">
			<div class="section-title">
				<h3>Konsultasi Bersama Kami</h3>
				<h5>Contact Us</h5>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="content">
							<h5>Informasi Kontak</h5>
							<p>Berikan pesan Anda kepada kami melalui konsultasi secara online dengan mengisi form ini.</p>
							<div class="informasi" style="display: flex; align-items: center; margin-bottom: 10px;">
								<img src="img/phone.png" alt="Phone Icon" style="margin-right: 10px;">
								<span>(+62) 8567 2125</span>
							</div>
							<div class="informasi" style="display: flex; align-items: center; margin-bottom: 10px;">
								<img src="img/mail.png" alt="Mail Icon" style="margin-right: 10px;">
								<span>cs@sehati.ilkomerz.biz.id</span>
							</div>
							<div class="informasi" style="display: flex; align-items: center;">
								<img src="img/pin.png" alt="Location Icon" style="margin-right: 10px;">
								<span>Atlantis</span>
							</div>
							<img class="circle1" src="img/circle1.png" alt="Circle 1">
							<img class="circle2" src="img/circle2.png" alt="Circle 2">
						</div>
					</div>
					
					<div class="col-md-8 col-sm-12">
						<div class="content-right">
							<form action="https://formsubmit.co/cs@sehati.ilkomerz.biz.id" method="POST">
								<div class="row">
									<div class="col">
										<h1>Nama Anda</h1>
										<div id="first-name-field">
											<input type="text" name="name" required placeholder="Name">
										</div>
									</div>
									<div class="col">
										<h1>Email Anda</h1>
										<div id="email-field">
											<input type="text" required placeholder="Email Address" name="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h1>Masukan Subject</h1>
										<div id="subject-field">
											<input type="text" required placeholder="Subject" name="subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h1>Pesan Anda</h1>
										<div id="message-field">
											<textarea cols="30" rows="5" id="form-message" name="message"  required placeholder="Message"></textarea>
										</div>
									</div>
								</div>
								<input type="hidden" name="_captcha" value="false">
                                <input type="hidden" name="_next" value="https://sehati.ilkomerz.biz.id/">
                                <input type="hidden" name="_template" value="table">
								<button class="button" type="submit" id="submit" >Send Message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact -->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="content">
						<div class="brand"><img src="img/LogoSehatiW.png" alt=""></div>
						<p>Kami selalu selalu memberikan pelayanan yang terbaik untuk pasien.</p>
						<p> We are happy, if our patient Healthy.</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="content">
						<h5>Layanan</h5>
						<ul>
							<li><a href="login.php">Buat Jadwal Temu</a></li>
							<li><a href="login.php">Cari Dokter</a></li>
							<li><a href="login.php">Medical Check-Up</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="content">
						<h5>Sumber</h5>
						<ul>
							<li><a href="404.html">Blog</a></li>
							<li><a href="soon.html">Product</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="content">
						<h5>Bantuan</h5>
						<ul>
							<li><a href="soon.html">Tentang Kami</a></li>
							<li><a href="soon.html">Kebijakan Platform</a></li>
							<li><a href="mailto: cs@sehati.gusendra.site">Pusat Bantuan</a></li>
							<li><a href="soon.html">FAQ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="content">
						<h5>Informasi Kontak</h5>
						<ul><li><a href="mailto: cs@sehati.gusendra.site" style="word-wrap: break-word">cs@sehati.gusendra.site</a></li></ul>
						<ul class="social" style="display: flex; flex-wrap: wrap; justify-content: center;">
							<img src="img/facebook.png" alt="">
							<img src="img/instagram.png" alt="">
							<img src="img/twitter.png" alt="">
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	<!-- footer bottom -->
	<div class="footer-bottom">
		<span>Copyright @2024 Sehati. All right reserved</span>
	</div>
	<!-- end footer bottom -->
	<!-- script -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.filterizr.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
	const counts = document.querySelectorAll('.count');
const speed = 867;
counts.forEach((counter) => {
    function update() {
        const target = Number(counter.getAttribute('data-target'));
        const count = Number(counter.innerText.replace(/,/g, ''));
        const inc = target / speed;
        if (count < target) {
            if (target > 1000) {
                counter.innerText = '+' + Math.floor(count + inc).toLocaleString();
            } else if (target > 50) {
                counter.innerText = Math.floor(count + inc).toLocaleString() + '%';
            } else {
                counter.innerText = Math.floor(count + inc).toLocaleString() + '+';
            }
            setTimeout(update, 15);
        } else {
            if (target > 1000) {
                counter.innerText = '+' + target.toLocaleString();
            } else if (target > 50) {
                counter.innerText = target.toLocaleString() + '% Positif';
            } else {
                counter.innerText = target.toLocaleString() + '+ Tahun';
            }
        }
    }
    update();
});
    </script>
<script>
	let counter = 1;
setInterval(() => {
    document.getElementById('s' + counter).checked = true;
    counter++;
    if(counter > 5) {
        counter = 1;
    }
}, 2000);
</script>
</body>
</html> 