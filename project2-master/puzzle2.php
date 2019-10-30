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

            As you keep walking deeper into the forest, you sense something is... <br>
            following you? You stop to look around your surroundings.<br>
            Find the stalker.
            <br>
            <br>
            <?php    
                $_SESSION['endtype'] = "was suddenly grabbed by many hands.. and pulled to the ground!!";
                echo" 
                    <a href = \"./leaderboard.php\"><p>Whatever. Just keep moving on.</p></a>
                    <br><br>";
            ?>

        </div>
       
        <div id = "click">
          <img id="clickpic" src="./clickforest.jpg" class = "background">
        
          <a href="./maze1.php">
          <img src="hands.png" class="hand" width= "30" height = "48"> </a>


        </div>
    

    </body>
</HTML>