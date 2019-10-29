<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "puzzle2">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            There is a riddle puzzle in front of you, what is the answer?
            <br>
            <a href = "./maze1.php"><p>solve puzzle</p></a>
            <br>
            <a href = "./end3.php"><p>give up...</p></a>

            
        </div>
       
    </body>
</HTML>