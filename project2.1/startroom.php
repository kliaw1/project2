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
                    }else{
                        echo "Oh? Your room looks...nonexistent??? What happened?
                        <br>";

                            echo "<a href = \"./enterDoor.php\"><p>Will you go in?</p></a> ";
                            $_SESSION['endtype'] = "was a coward and ran away!";
                            echo "<a href = \"./leaderboard.php\"><p>Or will you close the door?</p></a>";
                        
                    }
                    
            ?>

        </div>        
    </body>
</HTML>