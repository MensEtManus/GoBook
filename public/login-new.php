<?php

    header('Content-type: text/json');

    // configuration
    require("../includes/config.php"); 

    $response = array('success' => '', 'message' => '');


    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            $response['success'] = false;
            $response['message'] = 'username';
            
        }
        else if (empty($_POST["password"]))
        {
            $response['success'] = false;
            $response['message'] = 'password';
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        //
        print_r(count($rows));
        
        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["hash"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to portfolio
                $response['success'] = true;
                $response['message'] = 'Logged in';
                echo json_encode($response);
                return;
            }
        }
        //redirect("index.php");
        // else apologize
        $response['success'] = false;
        $response['message'] = 'Invalid username and/or password.';
        echo json_encode($response);
        return;

        
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>