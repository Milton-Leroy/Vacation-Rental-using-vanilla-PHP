<?php 

    $host = "localhost";
    $db_name = "house_rental";
    $db_password = "";
    $db_user = "root";

    try{
        $db = new PDO("mysql:host=".$host.";dbname=".$db_name."",$db_user,$db_password);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        die("Error connecting to the datababse".$e->getMessage());
    }