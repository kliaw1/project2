<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>

        <h1>SIGN UP</h1>
        <div id = 'main'>
            
            <div id = "intro">
                Welcome to Dicey Situations! New users sign up here!
                <br>
                <br>
            </div>
           
            <div >
                <form method = "post" action = "./confirm.php">
                    <strong>Enter a user name: </strong><input type = "text" name = "user" class = "textbox" required>
                    <br>
                    <br>
                    <strong>Enter a password: </strong><input type = "password" name = "password" class = "textbox" required>
                    <br>
                    <br>
                    <input type = "submit" value = "Sign up">
                </form>
               
            </div>
            
        </div>

        <div id = "bg">
          <img id="enterDoorpic" src="./enterDoor.jpg">
        </div>
    </body>
</HTML>
