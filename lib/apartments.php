<?php

class Apartment
{
    public $Apartment_ID;
    public $Name;
    public $Address;
    public $Zillow;
    public $Added;
}

function apartment_get ($con) {

    $stmt = $con->query("SELECT * FROM apartment");
    $result =$stmt->fetchAll(PDO::FETCH_CLASS, "Apartment");
    //$obj = $stmt->fetch();
    //$query 	= mysqli_query($con, $sql);
    // $apartments = array();
    // while ($row = mysqli_fetch_array($query))
    // {
        
    //     $appartment = new Apartment();
    //     $appartment->Name = $row['Name'];

    //     $apartments[] = $apartment;
    // }

    return $result;
}

function apartment_Save ($con, $apartment) {
    // TODO: This query isn't properly sanitized
    $sql = "INSERT INTO apartment (Apartment_ID, Name, Address, Zillow)
    VALUES ('$apartment->Apartment_ID', '$apartment->Name', '$apartment->Address', '$apartment->Zillow') 
    ON DUPLICATE KEY UPDATE 
    Name='$apartment->Name', Address='$apartment->Address', Zillow='$apartment->Zillow'";

    //echo $sql;

    // Execute query
    $con->query($sql);


    //$result = $db->exec("INSERT INTO table(firstname, lastname) VAULES('John', 'Doe')");
   // $insertId = $db->lastInsertId();
}

?>