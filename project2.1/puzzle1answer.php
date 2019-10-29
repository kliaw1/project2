<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div class = "match">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                $a1 = $_POST["answer1"];
                $a2 = $_POST["answer2"];
                $a3 = $_POST["answer3"];
                if(!(isset($_SESSION['user']))){
                    echo "<p>Warning!!!Somethng went wrong?! Your progress is currently not being recorded!!</p>";
                }
                if( ($a1 !=2) && ($a2!=4) && ($a3 !=6)){
                    $_SESSION['endtype'] = "was lacking in their wisdom and was absorbed by the universe!";
                    echo "The words fade away and a door has appeared!
                         <a href = \"./leaderboard.php\"><p>enter the door</p></a>";

                }else{                     
                    echo "The words fade away and a door has appeared!
                         <a href = \"./puzzle2.php\"><p>enter the door</p></a>";
                
                }
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        
    </body>
</HTML>