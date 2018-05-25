<?php

    // Get common functions
    require_once("../../app_config.php");
    require_once(LIBRARY_PATH ."/db.php");
    require_once(LIBRARY_PATH ."/apartments.php");

    // Initialize Vars
    $Name = "";
    $Address = "";
    $Zillow = "";

    // Retrieve post data
    $Name = isset($_POST['Name']) ? trim($_POST['Name']) : "";
    $Address = isset($_POST['Address']) ? trim($_POST['Address']) : "";
    $Zillow = isset($_POST['Zillow']) ? trim($_POST['Zillow']) : "";

    // Build apartment object
    $appartment = new Apartment();
    $appartment->Name = $Name;
    $appartment->Address = $Address;
    $appartment->Zillow = $Zillow;

    // Connect to db
    $con = db_connect($config);

    // Save apartment
    apartment_save($con,$appartment);

    // Get apartments
    $apartments = apartment_get($con);

    // Close db
    db_close($con);

    // Build return object
    $arr = array('successful' => true, 'error' => '', 'apartments' => $apartments);

    // Output
    header('Content-Type: application/json');
    echo json_encode($arr);

?>