<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Kecemasan - Sehati</title>
    <link rel="icon" href="../img/sehati-vector.png">
    <link rel="stylesheet" href="../css/question.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .question {
            margin-bottom: 32px;
        }
        .question h3 {
            margin-bottom: 10px;
        }
        
        
        @media (max-width: 600px) {
            .options {
                flex-direction: column;
            }
            .option {
                margin-bottom: 5px;
                padding: 8px;
                flex-direction: unset;
            }
        }
    </style>
</head>
<h1>Dalam 2 minggu terakhir.</h1>
<h2>Seberapa sering kamu merasa terganggu oleh hal berikut</h2>
<body style="margin: 56px;">
<form onsubmit="event.preventDefault(); calculateScore();">
    <div class="question">
        <h3>Kurang senang atau tertarik dalam kegiatan sehari-hari?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q1" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q1" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q1" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q1" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>Merasa sedih, muram, dan putus asa?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q2" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q2" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q2" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q2" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>Sulit tidur atau tidur nyenyak; atau terlalu banyak tidur?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q3" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q3" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q3" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q3" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Merasa lelah atau kekurangan energi?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q4" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q4" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q4" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q4" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Tidak nafsu makan, atau terlalu banyak makan?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q5" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q5" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q5" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q5" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Merasa buruk tentang diri sendiri, atau merasa gagal atau mengecewakan diri atau keluargamu?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q6" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q6" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q6" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q6" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Kesulitan berkonsentrasi, seperti saat membaca koran atau menonton TV?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q7" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q7" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q7" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q7" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Bergerak atau berbicara dengan lambat hingga orang lain menyadarinya? Atau merasa kurang istirahat dan tidak bisa diam lebih dari biasanya?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q8" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q8" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q8" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q8" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Merasa lebih baik mati, atau berpikir ingin menyakiti diri sendiri?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q9" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q9" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q9" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q9" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <input onclick="parent.redirectToSkorPage()" type="submit" value="Kirim Jawaban" style="color: #ffffff;border: none;cursor: pointer;box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.05), 0px 8px 16px -3px rgba(0, 0, 0, 0.08);display: flex;padding: 20px 32px;justify-content: center;align-items: center;gap: 10px;border-radius: 16px;background: var(--Color-Blue-blue-500, #4256A0);width: -webkit-fill-available;">

</form>

<script>
    function calculateScore() {
    var score = 0;
    for (var i = 1; i <= 9; i++) { // Sesuaikan dengan jumlah pertanyaan
        var radios = document.getElementsByName('q' + i);
        for (var j = 0; j < radios.length; j++) {
            if (radios[j].checked) {
                score += parseInt(radios[j].value);
            }
        }
    }

    var explanation1 = "";
        if (score >= 0 && score <= 4) {
            explanation1 = "Anda tidak mengalami depresi. Tetap jaga kesehatan mental Anda.";
        } else if (score >= 5 && score <= 9) {
            explanation1 = "Anda mengalami depresi ringan. Tetap jaga kesehatan mental Anda dan bicarakan dengan orang terdekat atau profesional kesehatan mental.";
        } else if (score >= 10 && score <= 14) {
            explanation1 = "Anda mengalami depresi sedang. Segera konsultasikan dengan profesional kesehatan mental untuk penilaian lebih lanjut dan perawatan yang tepat.";
        } else if (score >= 15 && score <= 19) {
            explanation1 = "Anda mengalami depresi berat. Segera konsultasikan dengan profesional kesehatan mental atau layanan kesehatan mental darurat untuk bantuan segera.";
        } else {
            explanation1 = "Anda mengalami depresi sangat berat. Segera konsultasikan dengan profesional kesehatan mental atau layanan kesehatan mental darurat untuk bantuan segera.";
        }

    var explanation2 = "";
            if (score >= 0 && score <= 4) {
                explanation2 = "Selamat! Anda tidak mengalami depresi. Tetap jaga kesehatan mental Anda dan bicarakan dengan orang terdekat jika Anda merasa perlu. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!";
            } else if (score >= 5 && score <= 9) {
                explanation2 = "Orang yang mengalami depresi ringan mungkin mengalami beberapa gejala depresi yang mempengaruhi kesejahteraan dan kualitas hidup mereka. Gejala-gejala ini mungkin tidak cukup parah untuk menimbulkan gangguan yang signifikan, tetapi tetap penting untuk memperhatikan perubahan suasana hati dan perilaku. Bicarakan dengan orang terdekat atau profesional kesehatan mental jika Anda merasa perlu. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            } else if (score >= 10 && score <= 14) {
                explanation2 = "Orang yang mengalami depresi sedang mungkin mengalami gejala depresi yang lebih signifikan yang mempengaruhi kesejahteraan dan kualitas hidup mereka. Gejala-gejala ini mungkin mulai mempengaruhi kehidupan sehari-hari, seperti pekerjaan, hubungan sosial, atau fungsi sehari-hari lainnya. Penting untuk mengevaluasi lebih lanjut dan mungkin merujuk ke profesional kesehatan mental untuk penilaian yang lebih mendalam. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            } else if (score >= 15 && score <= 19) {
                explanation2 = "Orang yang mengalami depresi berat mungkin mengalami gejala depresi yang signifikan dan mengganggu. Gejala-gejala ini mungkin sangat mempengaruhi pekerjaan, hubungan sosial, dan fungsi sehari-hari. Depresi berat dapat menyebabkan kesulitan yang signifikan dalam kehidupan sehari-hari dan mungkin memerlukan perawatan yang intensif. Segera konsultasikan dengan profesional kesehatan mental atau layanan kesehatan mental darurat untuk bantuan segera. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            } else {
                explanation2 = "Hai, apakah Anda baik-baik saja? Jika Anda merasa tidak baik, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            }


    sessionStorage.setItem('depression-test_score', score);
    sessionStorage.setItem('depression-test_explanation1', explanation1);
    sessionStorage.setItem('depression-test_explanation2', explanation2);
    sessionStorage.setItem('test_name', 'Tes depression');
    window.location.href = 'skor.html?test=depression-test';
}

</script>
</body>
</html>