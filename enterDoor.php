<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "enterDoor1">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            Instead of your room, you enter a forest. What happened to your stuff?
            <br>
            <br>
            Placed conspicuously in front of you is a table. There's a die on it.
            <br>
            <br>
            There's a note. It says: Take me. What will you do?
            <br>
            <br>
            <a href = "./takeDie.php"><p>Take the dice?</p></a>
            <br>
            <br>
            <a href = "./end2.php"><p>Or leave it behind?</p></a>

            
        </div>
       
    
        
    </body>
</HTML>