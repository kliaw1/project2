<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "puzzle1">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            You picked up the key. When you look up, strange words appeared before you!
            <br>
            
            <p>To move forward, demonstrate your wisdom....</p>
            
<!-- Trigger/Open the Modal -->
            
            
                    
<!-- The Modal -->
            <label for = "puzzleq">Show your wisdom</label>
            <input type = 'checkbox' id = "puzzleq" >
                <div>
                    <form method = "post" action = "./puzzle1answer.php" class = "w3-container">
                            <div class = "w3-section">
                                <label>1+1</label>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="answer1">
                            </div>
                            <div class = "w3-section">
                                <label>2+2</label>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="answer2">
                            </div>
                            <div class = "w3-section">
                                <label>3+3</label>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" name="answer3">
                            </div>
                            <div class = "w3-section">
                                <input class="w3-input w3-border w3-margin-bottom" type="submit" value = "Speak your answers">
                            </div>


                    </form>
                </div>
                <a href = "./puzzle2.php"><p>solve puzzle</p></a>
                <br>
                <a href = "./end3.php"><p>give up...</p></a>

            
        </div>
       
    </body>
</HTML>