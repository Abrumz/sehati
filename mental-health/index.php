<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sehati</title>
	<link rel="icon" href="../img/LogoSehati.png">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- end font -->

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- loader -->
	<div class="fakeLoader"></div>
	<!-- end loader -->
	
	<!-- navbar -->

	<nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top">
		<div class="container" style="display: flex; justify-content: space-between;">
			<a href="../" class="navbar-brand"><img src="../img/LogoSehati.png" alt=""></a>
			<div class="navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="icon ion-ios-menu"></i>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="nav navbar-nav navbar-collapse" data-in="#" data-out="#" style="justify-content: center !important;">
					<li class="nav-item">
						<a class="nav-link" href="#home">Beranda</a>
					</li>
					<li class="nav-item dropdown" >
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
							Layanan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
							<a class="dropdown-item" href="../login" >Booking</>
							<a class="dropdown-item" href="../login">Konsultasi</a>
							<a class="dropdown-item" href="../mental-health">Mental Health</a>
							<!-- <a class="dropdown-item" href="soon">Mental Health <span class="badge" style="align-content: center; align-items: center;">Coming Soon</span></a> -->
						</div>
					</li>	
					<li class="nav-item">
						<a class="nav-link" href="../">Kontak Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../">Blog</a>
					</li>
					
				</ul>
                <div class="nav navbar-nav navbar-collapse" style="justify-content: center !important; gap: 16px; font-family: Nunito Sans;     justify-content: flex-end !important;" >
						<a href="../login" class="button button-secondary">Masuk</a>
						<a href="../signup" class="button">Daftar</a>
					</div>
			</div>
		</div>
	</nav>
	
	<!-- end navbar -->

    <div id="home" class="home-intro" style="padding: 175px 0px 0px;">
		<div class="container-mental-health">
			<div class="mental-health-row">
				<div class="mental-health-text">
					<div class="home-intro-img">
						<img src="../img/medical.png" alt="Image">
					</div>
					<h1 class="mb-4">Mental Health</h1>
				</div>
				<p class="mb-4" style="margin-top: 16px; margin-bottom: 0 !important;">
					Skrining online adalah salah satu metode tercepat dan termudah untuk mengetahui apakah Anda mengalami gejala masalah kesehatan mental. Kondisi kesehatan mental, seperti <span style="font-weight: 600;">depresi atau kecemasan</span>, adalah nyata, umum, dan bisa diobati.
				</p>				
			</div>
		</div>
	</div>

	<div class="accordion">
		<div class="accordion-item">
		<button class="accordion-button">Tes Depresi</button>
			<div class="accordion-content">
				<p>Bagi orang yang mengalami kesedihan dan keputusasaan yang luar biasa, energi rendah, atau citra diri negatif.</p>
				<button class="depression-test-button">
					<a href="depression-test">Ikuti Tes Depresi</a>
				</button>
			</div>
		</div>

        <div class="accordion-item">
		<button class="accordion-button">Tes Kecemasan</button>
			<div class="accordion-content">
				<p>Tes ini membandingkan tanda-tanda serangan panik dan gangguan panik berdasarkan literatur ilmiah. Anda dapat mengetahui apakah Anda mengalami gangguan panik dan seberapa parah gejalanya. Tes ini juga membantu mengidentifikasi perbedaan antara kecemasan umum dan gangguan panik.</p>
				<button class="depression-test-button">
					<a href="anxiety-test">Ikuti Tes Depresi</a>
				</button>
			</div>
		</div>

        <!-- <div class="accordion-item">
            <button class="accordion-button">ANXIETY TEST</button>
            <div class="accordion-content">
                <p>Description for the Anxiety Test.</p>
                <a href="#">TAKE ANXIETY TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">ADHD TEST</button>
            <div class="accordion-content">
                <p>Description for the ADHD Test.</p>
                <a href="#">TAKE ADHD TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">BIPOLAR TEST</button>
            <div class="accordion-content">
                <p>Description for the Bipolar Test.</p>
                <a href="#">TAKE BIPOLAR TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">PSYCHOSIS & SCHIZOPHRENIA TEST</button>
            <div class="accordion-content">
                <p>For people who feel like their brain is playing tricks on them (seeing, hearing or believing things that don't seem real or quite right).</p>
                <a href="#">TAKE PSYCHOSIS & SCHIZOPHRENIA TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">PTSD TEST</button>
            <div class="accordion-content">
                <p>Description for the PTSD Test.</p>
                <a href="#">TAKE PTSD TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">EATING DISORDER TEST</button>
            <div class="accordion-content">
                <p>Description for the Eating Disorder Test.</p>
                <a href="#">TAKE EATING DISORDER TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">ADDICTION TEST</button>
            <div class="accordion-content">
                <p>Description for the Addiction Test.</p>
                <a href="#">TAKE ADDICTION TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">PARENT TEST: YOUR CHILD’S MENTAL HEALTH</button>
            <div class="accordion-content">
                <p>Description for the Parent Test.</p>
                <a href="#">TAKE PARENT TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">YOUTH MENTAL HEALTH TEST</button>
            <div class="accordion-content">
                <p>Description for the Youth Mental Health Test.</p>
                <a href="#">TAKE YOUTH MENTAL HEALTH TEST</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">TEST DE DEPRESIÓN</button>
            <div class="accordion-content">
                <p>Descripción del Test de Depresión.</p>
                <a href="#">REALIZAR TEST DE DEPRESIÓN</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">TEST DE ANSIEDAD</button>
            <div class="accordion-content">
                <p>Descripción del Test de Ansiedad.</p>
                <a href="#">REALIZAR TEST DE ANSIEDAD</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">SELF-INJURY SURVEY</button>
            <div class="accordion-content">
                <p>Description for the Self-Injury Survey.</p>
                <a href="#">TAKE SELF-INJURY SURVEY</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button">WORKPLACE MENTAL HEALTH SURVEY</button>
            <div class="accordion-content">
                <p>Description for the Workplace Mental Health Survey.</p>
                <a href="#">TAKE WORKPLACE MENTAL HEALTH SURVEY</a>
            </div>
        </div> -->
        <!-- <div class="accordion-item">
            <button class="accordion-button active">POSTPARTUM DEPRESSION TEST (NEW & EXPECTING PARENTS)</button>
            <div class="accordion-content" style="display: block; max-height: 200px;">
                <p>For new & expecting parents who began feeling overwhelming sadness during pregnancy or after their child's birth.</p>
                <a href="#">TAKE POSTPARTUM DEPRESSION TEST (NEW & EXPECTING PARENTS)</a>
            </div>
        </div> -->
    </div>

    <!-- Footer -->
	<?php include 'footer.html'; ?>

	<!-- script -->
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/jquery.filterizr.min.js"></script>
	<script src="../js/imagesloaded.pkgd.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/contact-form.js"></script>
	<script src="../js/main.js"></script>
	<script>
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                button.classList.toggle('active');

                if (button.classList.contains('active')) {
                    accordionContent.style.display = 'block';
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                } else {
                    accordionContent.style.maxHeight = 0;
                    setTimeout(() => {
                        accordionContent.style.display = 'none';
                    }, 300);
                }

                document.querySelectorAll('.accordion-button').forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.classList.remove('active');
                        otherButton.nextElementSibling.style.maxHeight = 0;
                        setTimeout(() => {
                            otherButton.nextElementSibling.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        document.addEventListener('click', (event) => {
            const isClickInsideAccordion = event.target.closest('.accordion');
            if (!isClickInsideAccordion) {
                document.querySelectorAll('.accordion-button').forEach(button => {
                    button.classList.remove('active');
                    button.nextElementSibling.style.maxHeight = 0;
                    setTimeout(() => {
                        button.nextElementSibling.style.display = 'none';
                    }, 300);
                });
            }
        });
    </script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html> 