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
            <br>
            You finally make it out of the maze. The dice knew the way all along. You decide not to question it anymore.
            Now, you see a floating door. You turn it but its locked. <br>
            You have the key right?
            <br>
            <br>
            <a href = "./end1.php"><p>Yes!!</p></a>
            <?php    
                $_SESSION['endtype'] = "is a liar. So the door fell and crushed them";
                echo "<a href = \"./leaderboard.php\"><p> No.. </p></a>";
            ?>
        </div>
        <div id = "bg">
          <img id="maze" src="./keydoor.jpg">
        </div>
    
    </body>
</HTML>