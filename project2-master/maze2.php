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
                You rolled a $roll and trusted the dice. You go through the left path. You keep going and reach another two way path.

                <br> The dice seems like its sentient and knows what way to go, but that freaks you out a little.

                <br> Do you trust the dice to pick for you again or do you want to put faith in yourself? <br>                
                ";
            
            ?>
            <a href = "./havekey.php"><p> I dont want to make my own choice! Roll the dice.</p></a>
        
            <a href = "./end3.php"><p>I am fully of making my own decisions. I want to pick a path.</p></a>   
            <br>
            <br>
        </div>
        <div id = "bg">
          <img id="maze" src="./mazepic2.jpeg">
         </div>
    
        
    </body>
</HTML>