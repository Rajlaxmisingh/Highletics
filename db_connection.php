<?php

    $dbhost="localhost";
    $dbuser = "root";
    $dbpass = "";
    $db_name = "test_db";

    $con =  mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);

    if(!$con){
        die(" Connection Failed ");
    }