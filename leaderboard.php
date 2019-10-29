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
            
            <h1>LEADERBOARD</h1>
        
        </div>
        <div class = "match">
            
            <?php
                include './common.php'; //used as a query validator in this assignment
                  
                        if(isset(($_SESSION['user']))&& (isset($_SESSION['endtype']))){
                            
                            $user = $_SESSION['user'];
                            $end = $_SESSION['endtype'];

                            
                            if(!(leaderboard($user, $end))){
                                echo "<strong> Something went wrong in displaying the board</strong>";
                            }

                        }else{
                            echo "<strong> Game failed to end completely!!</strong>";
                        }

                        
                   
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        
    </body>
</HTML>