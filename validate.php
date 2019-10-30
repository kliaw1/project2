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
                $user = $_POST["user"];
                $pass = $_POST["password"];

                if(!checkUser($user)){
                    echo "<p>Not a valid user! Please try again!</p>";
                }else{
                    if(!checkPass($user, $pass)){
                        echo "<p>Password and user doesn't match! Please try again!</p>";
                    }else{
                        
                       
                            $_SESSION['user'] = $user;
                        

                        $msg = $_SESSION['user'];
                        echo "<strong> Welcome to DICEY SITUATIONS $msg !</strong><br>";
                    //Test links:
                      //  echo "<a href = \"./end1.php\">Test this ending!</a><br>";

                       // echo "<a href = \"./end2.php\">Or test this ending!</a><br>";

                       echo "<a href = \"./startroom.php\">Open your door!!</a><br>";
                    

                    }
                
                }
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        <div id = "bg">
          <img id="enterDoorpic" src="./enterDoor.jpg">
        </div>
    
        
    </body>
</HTML>