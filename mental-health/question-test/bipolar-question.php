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
<h1>Dalam beberapa minggu terakhir.</h1>
<h2>Seberapa sering kamu merasa terganggu oleh hal berikut</h2>
<body style="margin: 56px;">
<form onsubmit="event.preventDefault(); calculateScore();">
    <div class="question">
        <h3>Apakah Anda pernah mengalami periode di mana suasana hati Anda sangat tinggi, ekspansif, atau iritabel selama setidaknya satu minggu?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q1" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q1" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q1" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q1" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa memiliki energi yang luar biasa atau merasa tidak memerlukan banyak tidur selama periode tersebut?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q2" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q2" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q2" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q2" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa sangat percaya diri atau memiliki harga diri yang sangat tinggi selama periode tersebut?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q3" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q3" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q3" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q3" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Apakah Anda pernah berbicara lebih cepat dari biasanya atau merasa sulit untuk tetap fokus pada satu topik?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q4" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q4" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q4" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q4" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Apakah Anda pernah melakukan tindakan yang tidak biasa atau berisiko selama periode suasana hati yang tinggi, seperti belanja berlebihan, keputusan impulsif, atau aktivitas seksual yang tidak biasa?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q5" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q5" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q5" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q5" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Apakah perubahan suasana hati ini menyebabkan masalah dalam pekerjaan, hubungan sosial, atau fungsi sehari-hari?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q6" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q6" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q6" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q6" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <input onclick="parent.redirectToSkorPage()" type="submit" value="Kirim Jawaban" style="color: #ffffff;border: none;cursor: pointer;box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.05), 0px 8px 16px -3px rgba(0, 0, 0, 0.08);display: flex;padding: 20px 32px;justify-content: center;align-items: center;gap: 10px;border-radius: 16px;background: var(--Color-Blue-blue-500, #4256A0);width: -webkit-fill-available;">

    <p>
        <small>*Hirschfeld RM, Williams JB, Spitzer RL, Calabrese JR, Flynn L, Keck Jr PE, Zajecka J. 2000. Development and validation of a screening instrument for bipolar spectrum disorder: the Mood Disorder Questionnaire. American Journal of Psychiatry, 157(11), 1873-1875. doi:10.1176/appi.ajp.157.11.1873.</small>
    </p>
</form>

<script>
    function calculateScore() {
    var score = 0;
    for (var i = 1; i <= 6; i++) { // Sesuaikan dengan jumlah pertanyaan
        var radios = document.getElementsByName('q' + i);
        for (var j = 0; j < radios.length; j++) {
            if (radios[j].checked) {
                score += parseInt(radios[j].value);
            }
        }
    }

    var explanation1 = "";
        if (score >= 0 && score <= 8) {
            explanation1 = "Anda Aman.";
        } else if (score >= 9 && score <= 16) {
            explanation1 = "Anda Mengalami Gangguan Bipolar Sedang";
        } else {
            explanation1 = "Anda Mengalami Gangguan Bipolar Berat";
        }

    var explanation2 = "";
            if (score >= 0 && score <= 4) {
                explanation2 = "Kemungkinan kecil gangguan bipolar. Orang dengan skor ini cenderung tidak menunjukkan gejala gangguan bipolar yang signifikan. Mereka mungkin mengalami fluktuasi suasana hati yang normal dan tidak sampai mengganggu kehidupan sehari-hari. Gejala yang dialami mungkin lebih sesuai dengan gangguan suasana hati lainnya atau bahkan stres sehari-hari.";
            } else if (score >= 5 && score <= 9) {
                explanation2 = "Gejala gangguan bipolar sedang. Orang dengan skor ini menunjukkan gejala yang lebih signifikan yang mungkin terkait dengan gangguan bipolar. Gejala-gejala ini mungkin mulai mempengaruhi kehidupan sehari-hari, seperti kesulitan dalam pekerjaan, hubungan sosial, atau fungsi sehari-hari lainnya. Namun, gejala ini mungkin belum cukup parah untuk menimbulkan gangguan yang berat. Penting untuk mengevaluasi lebih lanjut dan mungkin merujuk ke profesional kesehatan mental untuk penilaian yang lebih mendalam.";
            } else {
                explanation2 = "Gejala gangguan bipolar berat. Orang dengan skor ini kemungkinan besar mengalami gejala gangguan bipolar yang signifikan dan mengganggu. Gejala ini mungkin sangat mempengaruhi pekerjaan, hubungan sosial, dan fungsi sehari-hari. Gangguan suasana hati seperti mania atau hipomania mungkin terjadi dengan intensitas yang tinggi dan sering. Disarankan untuk segera konsultasi dengan profesional kesehatan mental untuk diagnosis dan pengobatan yang tepat. Hai, apakah Anda baik-baik saja? Jika Anda merasa tidak baik, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            }


    sessionStorage.setItem('bipolar-test_score', score);
    sessionStorage.setItem('bipolar-test_explanation1', explanation1);
    sessionStorage.setItem('bipolar-test_explanation2', explanation2);
    sessionStorage.setItem('test_name', 'Tes bipolar');
    window.location.href = 'skor.html?test=bipolar-test';
}

</script>
</body>
</html>

<!-- Hirschfeld, R. M., Williams, J. B., Spitzer, R. L., Calabrese, J. R., Flynn, L., Keck Jr, P. E., ... & Zajecka, J. (2000). Development and validation of a screening instrument for bipolar spectrum disorder: the Mood Disorder Questionnaire. American Journal of Psychiatry, 157(11), 1873-1875. doi:10.1176/appi.ajp.157.11.1873. -->