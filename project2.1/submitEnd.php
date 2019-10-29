<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div class ="bannerarea">
            
            <h1>You got to an end!</h1>
        
        </div>
        <div class = "match">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                  
                        if(isset($_SESSION['user'])){
                            
                            $user = $_SESSION['user'];
                            $end = $_SESSION['endtype'];
                            echo "<strong> Game ended for $user !</strong><br>";

                            echo "<a href = \"./leaderboard.php\"><p> Thank you for playing!!!</p></a>";

                        }else{
                            echo "<strong> Game was discontinued for the user !</strong>";
                        }

                        
                   
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        
    </body>
</HTML>