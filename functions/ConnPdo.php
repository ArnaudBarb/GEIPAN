<?php

function connPdo() 
{
    $serverName = "localhost";
    $userName = "root";
    $database = "geipan";
    $userPassword = "";

    $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}