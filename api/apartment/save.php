<?php

$Name = "";
$Address = "";
$Zillow = "";


    //retrieve post data
    $Name = isset($_POST['Name']) ? trim($_POST['Name']) : "";
    $Address = isset($_POST['Address']) ? trim($_POST['Address']) : "";
    $Zillow = isset($_POST['Zillow']) ? trim($_POST['Zillow']) : "";

    $con = new mysqli('localhost', 'root', '', 'rent');

    if ($con->connect_error) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }

    // This query isnt properly sanitized
    $sql = "INSERT INTO apartment (Name, Address, Zillow)
    VALUES ($Name, $Address, $Zillow)";

    // Execute query
    $con->query($sql);

    // Close connection
    $con->close();

    // Return a list of apartments
    include("get.php");

?>