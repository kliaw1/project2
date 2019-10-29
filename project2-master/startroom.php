<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "startroom">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            Oh? Your room looks...nonexistent??? What happened?
            <br>
            <a href = "./enterDoor.php"><p>Will you go in?</p></a>
            <br>
            <a href = "./end2.php"><p>Or will you close the door?</p></a>

            
        </div>
       
        4
        
    </body>
</HTML>