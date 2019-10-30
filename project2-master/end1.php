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
            
            <h1>You got yourself out of a... dicey situation!</h1>
        
        </div>
        <div class = "match">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                  
                        if(isset($_SESSION['user'])){
                            
                            $msg = $_SESSION['user'];
                            $_SESSION['endtype'] = "beat the game";

                            $end = $_SESSION['endtype'];
                            echo "<strong> $msg escaped the forest and was finally able to enter their room.</strong>
                            <br><br>";
                            echo "<a href = \"./leaderboard.php\">
                          
                            <p> Thank you for playing!</p></a>";

                        }else{
                            echo "<strong> Game was discontinued for the user !</strong>";
                        }

                        
                   
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        
    </body>
</HTML>