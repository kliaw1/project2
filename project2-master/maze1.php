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
            <br>
            After looking around you found some hands coming out from the ground? <br>
            You poked it and it shook your hand... then buried itself into the dirt.<br>
            ...<br>
            You continue and come across a giant maze. As you enter, you see a left path and a right path. 
            <br>Do you trust your luck and go a random path, 
            or use the dice to pick the path for you?
            <br>
            <br>
           
            <a href = "./maze2.php"><p>Roll the dice.</p></a>  

            <?php    
                $_SESSION['endtype'] = "was ambushed by the bushes of the hedges, and was never seen again";
                echo "<a href = \"./leaderboard.php\"><p> Believe in yourself! </p></a>";
            ?>
            <br>
            <br>
        </div>
        <div id = "bg">
          <img id="maze" src="./mazepic.jpg">
        </div>
       
    </body>
</HTML>