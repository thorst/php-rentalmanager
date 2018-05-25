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
    // Assume this will be doing an insert
    $param = array($apartment->Name,$apartment->Address,$apartment->Zillow);
    $sql = "INSERT INTO apartment (Name, Address, Zillow) VALUES (?, ?,?)";

    // However, if they decide on doing an update alter the sql, and append the id
    if ($apartment->Apartment_ID!="") {
        $sql = "Update apartment SET Name=?, Address=?, Zillow=? WHERE Apartment_ID=?";
        $param[] = $apartment->Apartment_ID;
    }
    
    // Execute the sql
    $stmt = $con->prepare($sql);
    $stmt->execute($param);
    
    // Get how many rows were updated
    //if ($stmt->rowCount()==1){}
    
    // Output errors
    // $databaseErrors = $stmt->errorInfo();
    // if( !empty($databaseErrors) ){  
    //     $errorInfo = print_r($databaseErrors, true); # true flag returns val rather than print
    //     $errorLogMsg = "error info: $errorInfo"; # do what you wish with this var, write to log file etc...         
    // }
}

?>