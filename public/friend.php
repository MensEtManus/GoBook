<?php

    header('Content-type: text/json');
    // configuration

    require("../includes/config.php");
    $sendback = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = query("SELECT users.id FROM users WHERE users.userName = ?", $_POST["search"]);
        $my_userName = query("SELECT users.userName FROM users WHERE users.id = ?", $_SESSION["id"]);
        $friend_list = query("SELECT friends.userID FROM friends WHERE friends.myID = ?", $_SESSION["id"]);
       
        if ($user !== false) {
          
            if (in_array($user[0]["id"], $friend_list) || $user[0]["id"] === $_SESSION["id"]) {
                $sendback["added_friend"] = "failed";
                echo json_encode($sendback);
            }
            $add = query("INSERT INTO friends (userID, userName, myID) VALUES(?, ?, ?)", $user[0]["id"], $_POST["search"], $_SESSION["id"]);
            $add = query("INSERT INTO friends (userID, userName, myID) VALUES(?, ?, ?)", $_SESSION["id"], $my_userName[0]["userName"], $user[0]["id"]);
            $sendback["added_friend"] = "success";
            echo json_encode($sendback);
        }
        else {
            $sendback["added_friend"] = "failed";
            echo json_encode($sendback);
        }
        

    }
   
    
?>