<?php

    function db_connect ($config) {
        $dbh = "";
        try 
        {
            $db = $config['db']['rent'];
            $dbh = new PDO("mysql:host=".$db['host'].";dbname=".$db['dbname'], $db['username'], $db['password']);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        return $dbh;
    }

    function db_close ($con) {

        // Close connection
        $dbh = null;
    }

?>