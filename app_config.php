<?php

    $config = array(
        "db" => array(
            "rent" => array(
                "dbname" => "rent",
                "username" => "root",
                "password" => "",
                "host" => "localhost"
            )
        ),
        "urls" => array(
            "baseUrl" => "http://localhost:8080/php-rentalmanager"
            //"baseUrl" => "http://rent.rf.gd"
        ),
        "paths" => array(
            // "resources" => "/path/to/resources",
            // "images" => array(
            //     "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            //     "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            // )
        )
    );


     defined("LIBRARY_PATH")
     or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/lib'));
     
    // defined("TEMPLATES_PATH")
    // or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
?>