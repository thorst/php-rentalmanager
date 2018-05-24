<?php

    // Initialize Vars
    $Name = "";
    $Address = "";
    $Zillow = "";


    // Retrieve post data
    $Name = isset($_POST['Name']) ? trim($_POST['Name']) : "";
    $Address = isset($_POST['Address']) ? trim($_POST['Address']) : "";
    $Zillow = isset($_POST['Zillow']) ? trim($_POST['Zillow']) : "";

    // Connect to db
    $con = new mysqli('localhost', 'root', '', 'rent');

    // Did it connect
    if ($con->connect_error) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }

    // TODO: This query isn't properly sanitized
    $sql = "INSERT INTO apartment (Name, Address, Zillow)
    VALUES ($Name, $Address, $Zillow)";

    echo $sql;

    // Execute query
    $con->query($sql);

    // Close connection
    $con->close();

    // Return a list of apartments
    include("get.php");

?>