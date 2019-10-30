<?php
    session_start();
?>
<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>

        <h1>LOGIN</h1>
        <div id = 'main'>
            <div id = "intro">
                Welcome to Dicey Situations! Please log in!
                <br>
                <br>
            </div>
           
            <div >
                <form method = "post" action = "./validate.php">
                    <strong>User name: </strong><input type = "text" name = "user" class = "textbox" required>
                    <br>
                    <br>
                    <strong>Password: </strong><input type = "password" name = "password" class = "textbox" required>
                    <br>
                    <br>
                    <input type = "submit" value = "Log in">
                </form>
               
                <a href = "./signup.php"><strong>Don't know who you are? Sign up here!</strong></a>
                <br>
                <br>
            </div>
            
        </div>
        <div id = "bg">
          <img id="enterDoorpic" src="./enterDoor.jpg">
        </div>
    
    </body>
</HTML>
