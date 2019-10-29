<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div class ="bannerarea">
        
            <h1>SIGN UP</h1>
        
        </div>
        <div id = 'main'>
            
            <div id = "intro">
                Welcome to Dicey Situations! New users sign up here!
            </div>
           
            <div >
                <form method = "post" action = "./confirm.php">
                    <strong>Enter a user name: </strong><input type = "text" name = "user" class = "textbox" required>
                    <br>
                    <strong>Enter a password: </strong><input type = "password" name = "password" class = "textbox" required>
                    <br>
                    <input type = "submit" value = "Sign up">
                </form>
               
            </div>
            
        </div>
    </body>
</HTML>
