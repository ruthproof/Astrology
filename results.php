<?php 

echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="styles.css"
</head>
<body>
    <header>

    </header>
    <main>
        <h1 class="center" >Your Year</h1>
        <h2><span id="result">';
        
    echo $_POST["queryBox"];
    
    echo '</span></h2>
     <div class="container">
        <div id="col-past" class="column">
            <p>
                <h3>Past</h3>
                <h4>Three of Cups</h4>
                <img src=".\assets\threeofcups.jpg">
                <h4>Celebration, friendship, creativity, collaborations.</h4>
            </p>
        </div>
        <div id="col-present" class="column">
            <p>
                <h3>Present</h3>
                <h4>The Moon</h4>
                <img src=".\assets\themoon.jpg">
                <h4>Illusion, fear, anxiety, subconscious, intuition</h4></p>
        </div>
        <div id="col-future" class="column">
            <p>
                <h3>Future</h3>
                <h4>Ten of Swords</h4>
                <img src=".\assets\tenofswords.jpg">
                <h4>Painful endings, deep wounds, betrayal, loss, crisis</h4>
                </p>
        </div>
    </div>

    </main>
    <footer>

    </footer>
</body>
</html>';

?>