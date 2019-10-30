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
            <br>
            Instead of your room, you enter a forest. What happened to your stuff?
           
            <br>
            Placed conspicuously in front of you is a table. There's a die on it.
            <br>
            <br>
            There's a note. It says: Take me. What will you do?
            <br>
            <br>
            <?php
                echo "<a href = \"./takeDie.php\"><p>Take the dice?</p></a>";
                
                
                $_SESSION['endtype'] = "was suddenly ambushed and was killed!";
                echo" 
                   
                    <a href = \"./leaderboard.php\"><p>Or leave it behind?</p></a>
                    <br><br>";
            
            ?>
            
        </div>
        <div id = "bg">
        <img id="lostforestpic" src="./lostforest.jpg">
        </div>
    
        
    </body>
</HTML>