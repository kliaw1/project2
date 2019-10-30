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

                

            There is a puzzle in front of you, what is the answer?
            <br><br>
            
              
            <div id = "box" style = "display: inline;">
                    <a class = "button" href = "#puzzle">Demonstrate your wisdom!</a>
                </div>

                <div id = "puzzle" class = "overlay">
                    <div class = "popup">
                        <a class = "close" href = "#">&times;</a>
                        <div class = "content">
                            <form method = "post" action = "./puzzle1answer.php">
                                <div class = "pq">
                                    <label>I am a box with no hinge, latch, or key, yet there's a golden treasure inside me. What am I?</label><br><br>
                                    <input type="text" name="answer1">
                                </div>
                                <br>
                                <div class = "pq">
                                    <label>I walk with four legs in the morning, 2 in the afternoon, and 3 in the evening. What am I?</label><br><br>
                                    <input type="text" name="answer2">
                                </div>
                                <br>
                                <div class = "pq">
                                    <label>I have cities, but no houses. I have mountains, but no trees. I have water, but no fish. What am I?</label><br><br>
                                    <input type="text" name="answer3">
                                </div>
                                <br>
                                <div class = "pq">
                                    <input type="submit" value = "Speak your answers">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
               
                $_SESSION['endtype'] = "gave up halfway and was forced to wander the forest forever!!";
                echo "<a href = \"./leaderboard.php\">give up...</a>
                <br><br>
                ";           
                ?>    
            
        </div>
        <div id = "bg">
        <img id="takekeypic" src="./forest.jpg">
        </div>
            
        </div>
       
    </body>
</HTML>