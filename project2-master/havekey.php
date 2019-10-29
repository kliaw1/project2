<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "havekey">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            You finally make it out of the maze. The dice knew the way all along. You decide not to question it anymore.
            There is now a giant door with a key hole. Do you have the key?
            <br>
            <a href = "./end1.php"><p>Yes!!</p></a>
            <br>
            <a href = "./end3.php"><p>Oh no... I don't...</p></a>

            
        </div>
    
    </body>
</HTML>