<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div id = "maze2">
        <br>  
            <?php
                include 'common.php'; //used as a query validator in this assignment
                    if(!(isset($_SESSION['user']))){
                        echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                    }
                    $roll = $_SESSION['diceroll'];
            
                echo "
                You rolled a $roll and trusted the dice. You go through the left path. <br> 
                You keep going and reach another two way path.

                <br> The dice seems like its sentient and knows what way to go, but that freaks you out a little.

                <br> Do you trust the dice to pick for you again or do you want to put faith in yourself? <br> <br>             
                ";
            
            ?>
            <a href = "./havekey.php"><p> I think the dice is up to something!</p></a>
        
            <?php    
                $_SESSION['endtype'] = "was turned into dice after throwing it away!";
                echo" 
                    <a href = \"./leaderboard.php\"><p> Ew, I want to toss the dice away. </p></a>
                    ";
            ?>
            <br> <br>
        </div>
        <div id = "bg">
          <img id="maze" src="./mazepic2.jpeg">
         </div>
    
        
    </body>
</HTML>