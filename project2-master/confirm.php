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
                if(!newUser($user, $pass)){
                    echo "<p>Try again.</p>";
                    echo "<a href = './index.php'><strong>Go Back.</strong></a>";
                }else{
                    echo "<p>Sign up was successful!</p>";
                    echo "<a href = \"login.php\"><strong>Please sign in now!</strong></a>";
                } 
            ?>
        </div>
        <div id = "bg">
          <img id="enterDoorpic" src="./enterDoor.jpg">
        </div>

    </body>
</HTML>