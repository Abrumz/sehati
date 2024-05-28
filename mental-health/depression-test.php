<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehati</title>
    <link rel="icon" href="../img/sehati-vector.png">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- end font -->

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .question {
            margin-bottom: 20px;
        }
        .question h3 {
            margin-bottom: 10px;
        }
        .options {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .option {
            margin-right: 10px;
        }
        .option input {
            margin-right: 5px;
        }
        @media (max-width: 600px) {
            .options {
                flex-direction: column;
            }
            .option {
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>

    <!-- loader -->
    <div class="fakeLoader"></div>
    <!-- end loader -->
    
    <!-- navbar -->

    <?php include 'header.html'; ?>
    
    <!-- end navbar -->

    <div id="home" class="home-intro" style="padding: 175px 0px 0px;">
        <div class="container-mental-health">
            <div class="mental-health-row">
                <div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
                    <h1 class="mb-4" style="margin: 0px">Tes Depresi</h1>
                </div>
                <p class="mb-4" style="margin-top: 16px;margin-bottom: 0 !important;display: flex;">
                    <img src="../img/checklist.png" alt="Green Checklist Icon" style="vertical-align: middle;margin-right: 8px;height: 100%;width: auto;">
                    Tes yang singkat dan valid secara ilmiah, digunakan oleh tenaga kesehatan.
                </p>
                <p class="mb-4" style="margin-top: 16px;margin-bottom: 0 !important;display: flex;">
                    <img src="../img/checklist.png" alt="Green Checklist Icon" style="vertical-align: middle;margin-right: 8px;height: 100%;width: auto;">
                    Berisi 9 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.
                </p>
                <p class="mb-4" style="margin-top: 16px;margin-bottom: 0 !important;display: flex;">
                    <img src="../img/checklist.png" alt="Green Checklist Icon" style="vertical-align: middle;margin-right: 8px;height: 100%;width: auto;">
                    Skor kamu bersifat rahasia. Ahli kesehatan mental hanya dapat melihat informasimu jika kamu membagikannya.
                </p>              
            </div>
        </div>
    </div>
    </div>

    <!-- Test -->
    <!-- <iframe src="question-test/depression-question.php" style="width: -webkit-fill-available;     height: -webkit-fill-available;"></iframe> -->
    <iframe src="question-test/depression-question.php" frameborder="0" scrolling="no" onload="resizeIframe(this)" style="width: -webkit-fill-available;"></iframe>
    <!-- <iframe src="question-test/depression-question.php" style="height: -webkit-fill-available; width: -webkit-fill-available; border-width: 0;"></iframe> -->


    <!-- End Test -->

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
        function calculateScore() {
            var score = 0;
            for (var i = 1; i <= 4; i++) {
                var radios = document.getElementsByName('q' + i);
                for (var j = 0; j < radios.length; j++) {
                    if (radios[j].checked) {
                        score += parseInt(radios[j].value);
                    }
                }
            }

            var explanation = "";
            if (score >= 0 && score <= 4) {
                explanation = "Skor kamu menandakan depresi yang sangat rendah, kamu baik-baik saja.";
            } else if (score >= 5 && score <= 9) {
                explanation = "Skor kamu menandakan depresi yang rendah, kamu baik-baik saja.";
            } else if (score >= 10 && score <= 14) {
                explanation = "Skor kamu menandakan depresi yang sedang, kamu perlu lebih banyak istirahat.";
            } else if (score >= 15 && score <= 19) {
                explanation = "Skor kamu menandakan depresi yang tinggi, kamu perlu berkonsultasi dengan ahli kesehatan.";
            } else {
                explanation = "kamu memiliki hasil yang sangat tinggi, saya sarankan ...";
            }

            sessionStorage.setItem('test1_score', score);
            sessionStorage.setItem('test1_explanation', explanation);

            sessionStorage.setItem('test_name', 'Test 1');
            window.location.href = 'skor.html?test=test1';

        }
    </script>
    <script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    }
</script>
<script>
    function redirectToSkorPage() {
        window.location.href = 'skor.html?test=depression-test'; // Ganti dengan URL yang sesuai
    }
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
