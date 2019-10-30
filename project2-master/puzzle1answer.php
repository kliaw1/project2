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
                if( ($a1 !="An egg") && ($a2!="A human") && ($a3 !="A map") ){
                     $_SESSION['endtype'] = "was lacking in their wisdom and was absorbed by the universe!";
                    echo "The words fade away and a door has appeared!<br><br>
                         <a href = \"./leaderboard.php\"><p>enter the door</p></a>";

                }else{                     
                    echo "The words fade away and a door has appeared! <br><br>
                         <a href = \"./puzzle2.php\"><p>enter the door</p></a>";
                   
                }
            ?>
            <br><br>
       </div>
        <div id = "bg">
        <img id="takekeypic" src="./puzzleforestdoor.jpg">
        </div>
        </div>

    </body>
</HTML>