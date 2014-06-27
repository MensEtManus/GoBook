<?php

    header('Content-type: text/json');
    // configuration

    require("../includes/config.php");
    $sendback = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        

        $events = array();
        $matches = array();
        $friend_list = array();
        
        $events = query("SELECT eventName, eventDate, time, eventDone FROM events WHERE events.userID = ?", $_SESSION["id"]);
        if ($events !== false) {
            $sendback["events"] = $events;
        }

        $matches = query("SELECT eventName, eventDate, time, userName FROM matches WHERE matches.myID = ?", $_SESSION["id"]);
        if ($matches !== false) {
            $sendback["matches"] = $matches;
        }

        $friend_list = query("SELECT userName FROM friends WHERE friends.myID = ?", $_SESSION["id"]);
        if ($friend_list !== false) {
            $sendback["friends"] = $friend_list;
        }
        
        echo json_encode($sendback);

    }
   
    
?>