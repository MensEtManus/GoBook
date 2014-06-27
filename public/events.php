<?php

    header('Content-type: text/json');
    // configuration

    require("../includes/config.php");

    $sendback = array();
  
    // if form was submitted
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $event = array("name" => $_POST["eventName"], "date" => $_POST["eventDate"], "time" => $_POST["time"], "done" => 0);
        $result = query("INSERT INTO events (eventName, eventDate, time, eventDone, userID) 
                        VALUES(?, ?, ?, ?, ?)", $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0, $_SESSION["id"]);
        
      
        if ($result !== false) { 
            $sendback["added"] = "success";
            // search for other matches with your friends
            $friends_match = query("SELECT friends.userID, friends.userName FROM events JOIN friends ON friends.userID = events.userID AND friends.myID = ? 
                            WHERE eventName = ? AND eventDate = ? AND time = ? AND eventDone = ?",
                            $_SESSION["id"], $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0);

            $my_userName = query("SELECT users.userName FROM users WHERE users.id = ?", $_SESSION["id"]);
            
            if ($friends_match !== false) {
                // add matches to the database 
                foreach ($friends_match as $friends) {
                    # code...
                    $matches = query("INSERT INTO matches (eventName, eventDate, time, userName, myID)
                                    VALUES(?, ?, ?, ?, ?)", $_POST["eventName"], $_POST["eventDate"], $_POST["time"], $friends["userName"], $_SESSION["id"]);
                    $matches = query("INSERT INTO matches (eventName, eventDate, time, userName, myID)
                                    VALUES(?, ?, ?, ?, ?)", $_POST["eventName"], $_POST["eventDate"], $_POST["time"], $my_userName[0]["userName"], $friends["userID"]);

                }   
                
                $sendback["friends"] = $friends_match;
                $sendback["events"] = $event;
                echo json_encode($sendback);
            }
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