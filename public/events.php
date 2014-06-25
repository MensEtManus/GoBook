<?php

    header('Content-type: text/json');
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        $result = query("INSERT INTO events (eventName, eventDate, time, eventDone, userID) 
                        VALUES(?, ?, ?, ?, ?)", $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0, $_SESSION["id"]);
        
        if ($result !== false) { 

            // search for other matches with your friends
            $match = query("SELECT friends.userID FROM events JOIN ON friends.userID = events.userID AND friends.myID = ? 
                            WHERE eventName = ? AND eventDate = ? AND time = ? AND eventDone = ?"
                            $_SESSION["id"], $_POST["eventName"], $_POST["eventDate"], $_POST["time"], 0);

            
            if ($match !== false) {

            }
            redirect("index.php");
        }
        else {
            apologize("Someting went wrong! Please try again!");
            return false;
        }
    }
    else
    {
        // else render form
        render("events_form.php", ["title" => "events"]);
    }

?>