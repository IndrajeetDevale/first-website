<?php

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "sanjeevan";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        exit("Database error");
    }

    $sql = "select email from subscribers where email = '" . $_POST["email"] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        exit("Already subscribed");
    }

    $sql = "insert into subscribers (email) values ('" . $_POST["email"] . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Subscribed";
    }

?>