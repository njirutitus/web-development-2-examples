<?php
    $host = 'localhost';
    $dbname = 'hotel_db';
    $user = 'root';
    $pass = '';
    //open connection
    try{
        $DBH = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        $DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        session_start();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>