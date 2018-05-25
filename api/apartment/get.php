<?php
    // Get common functions
    require_once("../../app_config.php");
    require_once(LIBRARY_PATH ."/db.php");
    require_once(LIBRARY_PATH ."/apartments.php");
    require_once(LIBRARY_PATH .'/login.php');

    //do security check
    session_start();
    check_logged_in();

    // Connect to db
    $con = db_connect($config);

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