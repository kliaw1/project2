<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "pickupdie">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
            ?>

            You look up and the table is gone. Instead, there's a sign on the door that says "Roll the dice before you open me!"
            <br>
            <br>
            <br>
            What will you do?
            <br>
            <br>

            <?php
                $roll = rand(1,6);

                if($roll >=3 ){
                    $_SESSION['diceroll']=$roll;
                    echo "<a href = \"./RollDice1.php\"><p>Roll the dice?</p></a>";
                   
                }else if($roll <=4){
                    $_SESSION['diceroll']=$roll;
                    echo "<a href = \"./RollDice2.php\"><p>Roll the dice?</p></a>";

                }
                echo "<a href = \"./end1.php\"><p>Or don't use it and just open the door?</p></a>";
            ?>            
        </div>
       
    
        
    </body>
</HTML>