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
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q1" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q1" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda mendengar suara-suara yang orang lain tidak dapat dengar? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q2" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q2" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa bahwa pikiran Anda sering "diselipkan" atau diambil oleh orang lain? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q3" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q3" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda mengalami kesulitan dalam berpikir jernih atau berkonsentrasi? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q4" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q4" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa bahwa ada kekuatan eksternal yang mengendalikan perasaan atau tindakan Anda? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q5" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q5" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa tidak memiliki emosi atau emosi yang Anda rasakan datar? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q6" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q6" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa cemas atau tegang tanpa alasan yang jelas? </h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q7" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q7" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q7" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q7" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa kesulitan dalam menjaga hubungan sosial atau berkomunikasi dengan orang lain?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q8" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q8" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q8" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q8" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa tidak termotivasi atau sulit melakukan aktivitas sehari-hari? </h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q9" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q9" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q9" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q9" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa bingung atau tidak tahu arah dalam hidup Anda?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q10" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q10" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q10" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q10" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa bahwa orang lain dapat mendengar atau membaca pikiran Anda? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q11" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q11" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda mengalami kesulitan dalam menjaga kebersihan atau merawat diri sendiri?  </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q12" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q12" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa bahwa Anda memiliki misi khusus yang hanya Anda yang bisa memahaminya? </h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q13" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q13" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda sering merasa bahwa lingkungan Anda telah berubah secara dramatis atau tidak nyata?</h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q14" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q14" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa sulit untuk berbicara dengan orang lain karena pikiran Anda terasa kacau atau kosong?</h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q15" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q15" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Apakah Anda merasa bahwa orang lain dapat mengendalikan atau mengarahkan tindakan Anda melalui kekuatan tertentu?</h3>
        <div class="options" style="display: flex; justify-content: space-around" required>
            <label class="option"><input type="radio" name="q16" value="1" required> Benar</label>
            <label class="option"><input type="radio" name="q16" value="0"> Tidak</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa terisolasi atau menarik diri dari interaksi sosial? </h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q17" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q17" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q17" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q17" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa kesulitan dalam memahami atau mengikuti percakapan? </h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q18" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q18" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q18" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q18" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa sangat curiga atau tidak percaya pada orang lain?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q19" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q19" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q19" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q19" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda merasa perubahan suasana hati yang ekstrem, seperti sangat bahagia kemudian sangat sedih tanpa alasan yang jelas? </h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q20" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q20" value="1"> Beberapa Kali</label>
            <label class="option"><input type="radio" name="q20" value="2"> Sering</label>
            <label class="option"><input type="radio" name="q20" value="3"> Hampir Selalu</label>
        </div>
    </div>

    <input onclick="parent.redirectToSkorPage()" type="submit" value="Kirim Jawaban" style="color: #ffffff;border: none;cursor: pointer;box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.05), 0px 8px 16px -3px rgba(0, 0, 0, 0.08);display: flex;padding: 20px 32px;justify-content: center;align-items: center;gap: 10px;border-radius: 16px;background: var(--Color-Blue-blue-500, #4256A0);width: -webkit-fill-available;">

    <p>
        <small>*Aquino, P. 2009. Diagnosing and Treating Schizophrenia. Virtual Mentor: American Medical Association Journal of Ethics, 11(1), 43-48. doi: 10.1001/virtualmentor.2009.11.1.cprl1-0901</small>
    </p>
</form>

<script>
    function calculateScore() {
    var score = 0;
    for (var i = 1; i <= 20; i++) { // Sesuaikan dengan jumlah pertanyaan
        var radios = document.getElementsByName('q' + i);
        for (var j = 0; j < radios.length; j++) {
            if (radios[j].checked) {
                score += parseInt(radios[j].value);
            }
        }
    }

    var explanation1 = "";
        if (score >= 0 && score <= 9) {
            explanation1 = "Anda Aman, memiliki risiko yang rendah untuk Schizophrenia.";
        } else if (score >= 10 && score <= 18) {
            explanation1 = "Anda Mengalami Gangguan schizophrenia Sedang";
        } else if (score >= 19 && score <= 27) {
            explanation1 = "Anda Mengalami Gangguan schizophrenia Tinggi";
        } else {
            explanation1 = "Anda Mengalami Gangguan schizophrenia Sangat Tinggi";
        }

    var explanation2 = "";
            if (score >= 0 && score <= 9) {
                explanation2 = "Anda Aman, memiliki risiko yang rendah untuk Schizophrenia. Orang dengan skor ini kemungkinan besar tidak mengalami gejala gangguan schizophrenia yang signifikan. Namun, penting untuk tetap memantau gejala dan perasaan Anda. Jika Anda merasa tidak nyaman atau khawatir, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan! Peluk Jauh untukmu sayangku.";
            } else if (score >= 10 && score <= 18) {
                explanation2 = "Gejala gangguan schizophrenia sedang. Orang dengan skor ini menunjukkan gejala yang lebih signifikan yang mungkin terkait dengan gangguan schizophrenia. Gejala-gejala ini mungkin mulai mempengaruhi kehidupan sehari-hari, seperti kesulitan dalam pekerjaan, hubungan sosial, atau fungsi sehari-hari lainnya. Namun, gejala ini mungkin belum cukup parah untuk menimbulkan gangguan yang berat. Penting untuk mengevaluasi lebih lanjut dan mungkin merujuk ke profesional kesehatan mental untuk penilaian yang lebih mendalam.";
            } else if (score >= 19 && score <= 27) {
                explanation2 = "Gejala gangguan schizophrenia tinggi. Orang dengan skor ini kemungkinan besar mengalami gejala gangguan schizophrenia yang signifikan dan mengganggu. Gejala ini mungkin sangat mempengaruhi pekerjaan, hubungan sosial, dan fungsi sehari-hari. Gangguan suasana hati seperti mania atau hipomania mungkin terjadi dengan intensitas yang tinggi dan sering. Disarankan untuk segera konsultasi dengan profesional kesehatan mental untuk diagnosis dan pengobatan yang tepat. Hai, apakah Anda baik-baik saja? Jika Anda merasa tidak baik, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan! Peluk Jauh untukmu sayangku.";
            } else {
                explanation2 = "Gejala gangguan schizophrenia sangat tinggi. Orang dengan skor ini kemungkinan besar mengalami gejala gangguan schizophrenia yang sangat signifikan dan mengganggu. Gejala ini mungkin sangat mempengaruhi pekerjaan, hubungan sosial, dan fungsi sehari-hari. Gangguan suasana hati seperti mania atau hipomania mungkin terjadi dengan intensitas yang sangat tinggi dan sering. Disarankan untuk segera konsultasi dengan profesional kesehatan mental untuk diagnosis dan pengobatan yang tepat. Hai, apakah Anda baik-baik saja? Jika Anda merasa tidak baik, jangan ragu untuk berbicara dengan orang terdekat atau profesional kesehatan mental. Ingat, Anda tidak sendirian. Semoga harimu menyenangkan! Peluk Jauh untukmu sayangku.";
            }


    sessionStorage.setItem('schizophrenia-test_score', score);
    sessionStorage.setItem('schizophrenia-test_explanation1', explanation1);
    sessionStorage.setItem('schizophrenia-test_explanation2', explanation2);
    sessionStorage.setItem('test_name', 'Tes Schizophrenia');
    window.location.href = 'skor.html?test=schizophrenia-test';
}

</script>
</body>
</html>

<!-- Hirschfeld, R. M., Williams, J. B., Spitzer, R. L., Calabrese, J. R., Flynn, L., Keck Jr, P. E., ... & Zajecka, J. (2000). Development and validation of a screening instrument for schizophrenia spectrum disorder: the Mood Disorder Questionnaire. American Journal of Psychiatry, 157(11), 1873-1875. doi:10.1176/appi.ajp.157.11.1873. -->