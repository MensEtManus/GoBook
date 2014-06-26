<?php

    header('Content-type: text/json');
    // configuration

    require("../includes/config.php");

    $sendback = array();
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        $result = query("INSERT INTO events (eventName, eventDate, time, eventDone, userID) 
                        VALUES(?, ?, ?, ?, ?)", $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0, $_SESSION["id"]);
        
        
        if ($result !== false) { 

            // search for other matches with your friends
            $friends_match = query("SELECT friends.userID, friends.userName FROM events JOIN friends ON friends.userID = events.userID AND friends.myID = ? 
                            WHERE eventName = ? AND eventDate = ? AND time = ? AND eventDone = ?",
                            $_SESSION["id"], $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0);


            if ($friends_match !== false) {


                echo json_encode($sendback);
            }
            //redirect("index.php");
        }
        else {
            $sendback["added"] = "failed";
            echo json_encode($sendback);
        }
    }
    else
    {
        // else render form
        render("events_form.php", ["title" => "events"]);
    }

?>