<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "rolldiceLess3">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
                    $roll = $_SESSION['diceroll'];
            
                echo "
                <br> 
                You rolled a $roll. The ground vibrates and there's a hum in the air before it suddenly stops. It's quiet.
                
                <br>You open the door and walk in. It's still not your room and there's another table in front of you.
                <br> You turn around. The door is gone. You turn back and there's a key on the table now.
                <br> Will you take it? <br> 
                <br>                
                ";
            
            ?>

            <a href = "./puzzle2.php"><p>Take the key?</p></a>
  

            <?php   
                $_SESSION['endtype'] = "tried to find their own way out and was never seen again!";
                echo" 
            
                    <a href = \"./leaderboard.php\"><p>Or leave it be?</p></a>";
            echo "<br> <br>";
            ?>
                  
        </div>
        <div id = "bg">
        <img id="takekeypic" src="./takekey.jpg">
        </div>
    
    
        
    </body>
</HTML>