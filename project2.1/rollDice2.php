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
                You rolled a $roll. The ground vibrates and there's a hum in the air before it suddenly stops. It's quiet.
                
                <br>You open the door and walk in. It's still not your room and there's another table in front of you.

                <br> You turn around. The door is gone. You turn back and there's a key on the table now.

                <br> Will you take it? <br>                
                ";
            
            ?>

            <a href = "./puzzle1.php"><p>Take the key?</p></a>
            <br>
            <br>

            <?php   
                $_SESSION['endtype'] = "tried to find their own way out and was never seen again!";
                echo" 
                    <br>
                    <br>
                    <a href = \"./leaderboard.php\"><p>Or leave it be?</p></a>";
            
            ?>
            

                   
        </div>
       
    
        
    </body>
</HTML>