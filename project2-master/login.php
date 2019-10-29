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
        
            <h1>LOGIN</h1>
        
        </div>
        <div id = 'main'>
            
            <div id = "intro">
                Welcome to Dicey Situations! Please log in!
            </div>
           
            <div >
                <form method = "post" action = "./validate.php">
                    <strong>User name: </strong><input type = "text" name = "user" class = "textbox" required>
                    <br>
                    <strong>Password: </strong><input type = "password" name = "password" class = "textbox" required>
                    <br>
                    <input type = "submit" value = "Log in">
                </form>
               
               <p>New user? Sign up here first!</p>
            </div>
            
        </div>
        <div id = "bg">
          <img id="enterDoorpic" src="./enterDoor.jpg">
        </div>
    
    </body>
</HTML>
