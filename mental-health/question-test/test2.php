<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <script>
        function calculateScore() {
            var score = 0;
            for (var i = 1; i <= 5; i++) {
                var radios = document.getElementsByName('q' + i);
                for (var j = 0; j < radios.length; j++) {
                    if (radios[j].checked) {
                        score += parseInt(radios[j].value);
                    }
                }
            }
    
            var explanation = "";
            if (score >= 0 && score <= 10) {
                explanation = "Goblog";
            } else if (score >= 11 && score <= 15) {
                explanation = "kamu memiliki hasil yang sedang, saya sarankan ...";
            } else {
                explanation = "kamu memiliki hasil yang tinggi, saya sarankan ...";
            }
    
            sessionStorage.setItem('test2_score', score);
            sessionStorage.setItem('test2_explanation', explanation);
    
            window.location.href = 'skor.php?test=test2';
        }
    </script>
</head>
<body>
    <form onsubmit="event.preventDefault(); calculateScore();">
        <h3>Merasa sedih, muram, dan putus asa?</h3>
        <input type="radio" name="q1" value="0"> Tidak Pernah<br>
        <input type="radio" name="q1" value="1"> Beberapa Hari<br>
        <input type="radio" name="q1" value="2"> Sebagian Besar Hari<br>
        <input type="radio" name="q1" value="3"> Hampir Setiap Hari<br>

        <!-- Add more questions as needed -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>
