<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "maze1">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            You come across a giant maze, and enter it. There is a left path and a right path. Do you trust your luck and just go a random path, 
            or use the dice to pick the path for you?
            <br>
            <br>
            <br>
            <br>

           
            <a href = "./maze2.php"><p>Roll the dice?</p></a>  
    

            <a href = "./end3.php"><p>Or don't use it and pick one on your own?</p></a>
                
        </div>
       
        
    </body>
</HTML>