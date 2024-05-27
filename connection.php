<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "fabprop";
 
    
if(!$con = mysqli_connect($dbhost, $dbuser,$dbpassword,$dbname))
{
    die("failed to conect to database");
}

