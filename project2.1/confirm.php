<HTML>
    <head>
        <title>Dicey Situations</title>
        <link rel = "stylesheet" type = "text/css" href = "./style.css">
    </head>

    <body>
        <div class ="bannerarea">
            
            <h1>Sign up was:</h1>
        
        </div>
        <div class = "match">
            
            <?php
                include 'common.php'; //used as a query validator in this assignment
                $user = $_POST["user"];
                $pass = $_POST["password"];
                if(!newUser($user, $pass)){
                    echo "<p>This username is already in use! Try again</p>";
                
                }else{
                    echo "<p>Sign up was successful!!</p>";
                    echo "<a href = \"login.php\"><strong>Please sign in now!!</strong></a>";
                }
                
            ?>
       
        </div>
       
        <div id = "intro" style = "margin-top: 15px;">
               
        </div>
        
    </body>
</HTML>