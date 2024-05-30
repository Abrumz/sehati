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
        <h3>Seberapa sering Anda mengalami kesulitan untuk menyelesaikan tugas yang memerlukan pemikiran jangka panjang?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q1" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q1" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q1" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q1" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda mengalami kesulitan mengatur tugas atau aktivitas sehari-hari?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q2" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q2" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q2" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q2" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question">
        <h3>Seberapa sering Anda kesulitan mempertahankan perhatian pada tugas-tugas atau aktivitas yang monoton?</h3>
        <div class="options" required>
            <label class="option"><input type="radio" name="q3" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q3" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q3" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q3" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sering Anda mengalami kesulitan mendengarkan ketika orang lain berbicara kepada Anda?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q4" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q4" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q4" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q4" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sering Anda mengalami kesulitan mengikuti instruksi atau menyelesaikan tugas?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q5" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q5" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q5" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q5" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sering Anda merasa gelisah atau gelisah di tempat duduk Anda?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q6" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q6" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q6" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q6" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sering Anda merasa sulit menunggu giliran Anda dalam situasi sosial?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q7" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q7" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q7" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q7" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    <div class="question" required>
        <h3>Seberapa sering Anda menyela atau memotong pembicaraan orang lain?</h3>
        <div class="options">
            <label class="option"><input type="radio" name="q8" value="0" required> Tidak Pernah</label>
            <label class="option"><input type="radio" name="q8" value="1"> Beberapa Hari</label>
            <label class="option"><input type="radio" name="q8" value="2"> Sebagian Besar Hari</label>
            <label class="option"><input type="radio" name="q8" value="3"> Hampir Setiap Hari</label>
        </div>
    </div>

    
    <input onclick="parent.redirectToSkorPage()" type="submit" value="Kirim Jawaban" style="color: #ffffff;border: none;cursor: pointer;box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.05), 0px 8px 16px -3px rgba(0, 0, 0, 0.08);display: flex;padding: 20px 32px;justify-content: center;align-items: center;gap: 10px;border-radius: 16px;background: var(--Color-Blue-blue-500, #4256A0);width: -webkit-fill-available;">

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

        var explanation = "";
            if (score >= 0 && score <= 8) {
                explanation = "Orang dengan skor ini cenderung tidak menunjukkan gejala ADHD yang signifikan. Mereka mungkin memiliki sedikit kesulitan dalam perhatian atau hiperaktif/impulsif, tetapi tidak sampai mengganggu kehidupan sehari-hari secara berarti.";
            } else if (score >= 9 && score <= 16) {
                explanation = "Skor ini menunjukkan adanya gejala ADHD yang sedang. Orang dengan skor ini mungkin mengalami beberapa kesulitan dalam perhatian atau hiperaktif/impulsif yang mempengaruhi kehidupan sehari-hari, namun masih bisa mengelola sebagian besar aktivitasnya.";
            } else {
                explanation = "Skor ini menunjukkan gejala ADHD yang berat. Orang dengan skor ini kemungkinan besar mengalami kesulitan yang signifikan dalam perhatian atau hiperaktif/impulsif yang sangat mempengaruhi kehidupan sehari-hari dan memerlukan perhatian atau intervensi profesional.";
            }

        sessionStorage.setItem('adhd-test_score', score);
        sessionStorage.setItem('adhd-test_explanation', explanation);
        sessionStorage.setItem('test_name', 'Tes ADHD');
        window.location.href = 'skor.html?test=adhd-test';
    }
</script>
</body>
</html>

<!-- Kessler, R. C., Adler, L., Ames, M., Demler, O., Faraone, S., Hiripi, E., ... & Ustun, T. B. (2005). The World Health Organization Adult ADHD Self-Report Scale (ASRS): a short screening scale for use in the general population. Psychological Medicine, 35(2), 245-256. doi:10.1017/S0033291704002892. -->