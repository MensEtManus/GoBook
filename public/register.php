<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if (empty($_POST["username"])) {
            apologize("Please enter your username!");
            return false;
        }
        else if (empty($_POST["password"])) {
            apologize("Please enter your password!");
            return false;
        }
        else if ($_POST["password"] !== $_POST["confirmation"]) {
            apologize("Your passwords do not match!");
            return false;
        }

        $result = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        
        if ($result !== false) {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION['id'] = $id;
            redirect("index.php");
        }
        else {
            apologize("The username seems to be taken!");
            return false;
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>