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
    <link rel="stylesheet" href="../css/style.css">
<body>
<div id="result">
    <div id="home" class="home-intro" style="padding: 175px 0px 0px; ">
        <div class="container-mental-health" style="border-radius: 16px;
        background: var(--base-white, #FFF);
        box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.16);">
            <div class="mental-health-row" style="display: flex;     flex-direction: column;">
                <div style="display: flex; flex-direction: row; flex-wrap: nowrap; padding: 32px;">
                    <h1 class="mb-4" style="margin: 0px; display: flex;flex-direction: row;">Skor Kamu : <span id="score"></span></h1>
                </div>
                <div class="skor" style="padding: 32px;">
                    <p class="mb-4" style="margin-top: 16px;margin-bottom: 0 !important;display: flex; justify-content: center; font-weight: 700;">
                        <span id="explanation"></span>
                    </p>
                    <p class="mb-4" style="margin: 0px; display: flex;flex-direction: row; justify-content: center; padding-top: 16px;">                        
                        (Kalimat ini masih dalam pengembangan). <br>Kamu masih menjalani kegiatan sehari-hari, namun dengan kurang bersemangat atau merasa tertarik. Konsultasi dengan ahli kesehatan mental untuk mencari tahu penyebab dan solusinya. 
                    </p>  
                </div>                       
            </div>
        </div>
    </div>
</div>

    <div id="result" style="display: none">
        <h1>Hasil Test: <span id="test_name"></span></h1>
        <p><span id="score"></span></p>
        <p><span id="explanation"></span></p>
    </div>

    <!-- script -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.filterizr.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/magnific-popup.min.js"></script>
    <script src="../js/contact-form.js"></script>
    <script src="../js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const test = urlParams.get('test');

            let testName = sessionStorage.getItem('test_name');
            let score = sessionStorage.getItem(`${test}_score`);
            let explanation = sessionStorage.getItem(`${test}_explanation`);

            if (testName && score && explanation) {
                document.getElementById('test_name').textContent = testName;
                document.getElementById('score').textContent = score;
                document.getElementById('explanation').textContent = explanation;
            } else {
                document.getElementById('result').innerHTML = "<p>No data found. Please complete the test first.</p>";
            }

            var height = document.body.scrollHeight;
            window.parent.postMessage({ type: 'setHeight', height: height }, '*');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
