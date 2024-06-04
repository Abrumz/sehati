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
        <h3>Apakah Anda sering merasa cemas atau gelisah tanpa alasan yang jelas?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q1" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q1" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q1" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q1" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>Tidak mampu menghentikan atau mengendalikan kekhawatiran.</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q2" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q2" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q2" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q2" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>terlalu khawatir tentang berbagai hal.</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q3" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q3" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q3" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q3" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Kesulitan bersantai.</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q4" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q4" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q4" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q4" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Menjadi sangat gelisah sehingga sulit untuk duduk diam.</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q5" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q5" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q5" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q5" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Menjadi mudah kesal atau mudah tersinggung.</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q6" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q6" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q6" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q6" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Merasa takut seolah-olah sesuatu yang buruk akan terjadi.</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q7" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q7" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q7" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q7" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sulitkah masalah ini dalam melakukan pekerjaan, mengurus barang rumah tangga, atau bergaul dengan orang lain? <br> Opsional, tidak disertakan kedalam skor akhir.</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q8" value="0"> Tidak Sulit</label>
            <label class="option"><input type="radio" name="q8" value="0"> Biasa Saja</label>
            <label class="option"><input type="radio" name="q8" value="0"> Cukup Sulit</label>
            <label class="option"><input type="radio" name="q8" value="0"> Sangat Sulit</label>
        </div>
    </div>

    
    <input onclick="parent.redirectToSkorPage()" type="submit" value="Kirim Jawaban" style="color: #ffffff;border: none;cursor: pointer;box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.05), 0px 8px 16px -3px rgba(0, 0, 0, 0.08);display: flex;padding: 20px 32px;justify-content: center;align-items: center;gap: 10px;border-radius: 16px;background: var(--Color-Blue-blue-500, #4256A0);width: -webkit-fill-available;">

    <p>
        <small>*Spitzer RL, Kroenke K, Williams JBW, Löwe B. 2006. A Brief Measure for Assessing Generalized Anxiety Disorder: The GAD-7. Arch Intern Med. 2006;166(10):1092–1097. doi:10.1001/archinte.166.10.1092</small>
    </p>

</form>

<script>
    function calculateScore() {
    var score = 0;
    for (var i = 1; i <= 8; i++) { // Sesuaikan dengan jumlah pertanyaan
        var radios = document.getElementsByName('q' + i);
        for (var j = 0; j < radios.length; j++) {
            if (radios[j].checked) {
                score += parseInt(radios[j].value);
            }
        }
    }

    var explanation1 = "";
        if (score >= 0 && score <= 4) {
            explanation1 = "Anda Aman.";
        } else if (score >= 5 && score <= 9) {
            explanation1 = "Anda Mengalami Kecemasan Ringan";
        } else if (score >= 10 && score <= 14) {
            explanation1 = "Anda Mengalami Kecemasan Sedang";
        } else {
            explanation1 = "Anda Mengalami Kecemasan Berat";
        }

    var explanation2 = "";
            if (score >= 0 && score <= 4) {
                explanation2 = "Tidak menunjukkan gejala kecemasan yang signifikan. Kecemasan dalam rentang ini mungkin masih dalam batas normal dan dapat diatasi dengan strategi koping sehari-hari.";
            } else if (score >= 5 && score <= 9) {
                explanation2 = "Menunjukan adanya gejala kecemasan ringan. Orang dengan skor ini mungkin mengalami beberapa kesulitan dalam perhatian atau hiperaktif/impulsif yang mempengaruhi kehidupan sehari-hari, namun masih bisa mengelola sebagian besar aktivitasnya. Penting untuk memperhatikan pola hidup sehari-hari dan mungkin perlu berkonsultasi dengan profesional kesehatan untuk mendapatkan saran lebih lanjut.";
            } else if (score >= 10 && score <= 14) {
                explanation2 = "Menunjukkan adanya gejala kecemasan sedang. Orang dengan skor ini mungkin mengalami kesulitan yang signifikan dalam perhatian atau hiperaktif/impulsif yang mempengaruhi kehidupan sehari-hari. Sangat disarankan untuk berkonsultasi dengan profesional kesehatan untuk evaluasi dan perawatan lebih lanjut. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku";
            } else {
                explanation2 = "Menunjukkan kecemasan yang sangat tinggi. Ini mungkin memerlukan intervensi segera oleh profesional kesehatan mental dan terapi yang intensif untuk mengelola gejala dan mengurangi risiko komplikasi kesehatan mental yang serius. Hai, apakah Anda baik-baik saja? Jika Anda merasa tidak baik, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan!, Peluk Jauh untukmu sayangku.";
            }


    sessionStorage.setItem('anxiety-test_score', score);
    sessionStorage.setItem('anxiety-test_explanation1', explanation1);
    sessionStorage.setItem('anxiety-test_explanation2', explanation2);
    sessionStorage.setItem('test_name', 'Tes anxiety');
    window.location.href = 'skor.html?test=anxiety-test';
}

</script>
</body>
</html>

<!-- https://screening.mhanational.org/screening-tools/anxiety/?ref -->