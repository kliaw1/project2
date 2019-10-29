<?php

function checkUser($user){
    $file = "./user.txt";
    $contents = file_get_contents($file);
    if(preg_match_all("/$user/", $contents, $matches)){
        return true;
    }else{
        echo "<p>User doesn't exist!</p>";
    }
}
function checkPass($user, $pass){
    $file = "./user.txt";
    $contents = file_get_contents($file);

    if(preg_match_all("/$user,$pass/", $contents, $matches)){
        return true;
    }else{
        echo "<p>Either the user name or the password is wrong!</p>";
    }
}
function newUser($user, $pass){
    $file = "./user.txt";
    $contents = file_get_contents($file);
    if(preg_match_all("/$user/", $contents, $matches)){
        echo "<p>User already exists!</p>";
    }else{
        $newUser = $user.",".$pass."\r\n";
    
        $valid = file_put_contents("user.txt", $newUser, FILE_APPEND);
        if($valid===false){
            echo "<p>Failed to sign up!!</p>";
        }else{
            return true;
        }
        
    }
}
function leaderboard($user, $end){

        $report = "\r\n".$user." ".$end."!!";
        $valid = file_put_contents("leaderboard.txt", $report, FILE_APPEND);

        if($valid===false){
            echo "<p>Something went wrong!! Failed to add to the leaderboard!</p>";
            return false;

        }else{
            echo "<h1> $report </h1>";
            echo "<p>
                        <h2>Thank you for playing!!</h2>
                        But there are still other possibilities!
                        <br>
                    <a href = \"./login.php\">Try again?</a></p>";

            echo "<p>Here are what other players got!!</p>";
            $board = displayBoard();
            return true;
            
    }
}
function displayBoard(){
        $file = "./leaderboard.txt";
        $contents = file_get_contents($file);

        
        $contents = explode("\n", $contents);
        $count = count($contents);

        for($i=0; $i<$count; $i++){
            $j = $i+1;
            echo $j.".".$contents[$i];
            echo "<br>";
        }
}

?>