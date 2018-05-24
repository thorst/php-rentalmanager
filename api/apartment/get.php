<?php

class Apartment
{
    public $Apartment_ID;
    public $Name;
    public $Address;
    public $Zillow;
    public $Added;
}

$con = @mysqli_connect('localhost', 'root', '', 'rent');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

$sql 	= 'SELECT * FROM apartment';
$query 	= mysqli_query($con, $sql);
$apartments = array();
while ($row = mysqli_fetch_array($query))
{
    
    $appartment = new Apartment();
    $appartment->Name = $row['Name'];

    $apartments[] = $apartment;
}

// Close connection
mysqli_close ($con);




$arr = array('successful' => true, 'error' => '', 'apartments' => $apartments);

echo json_encode($arr);
?>