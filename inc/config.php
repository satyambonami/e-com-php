<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "e-com";
    $conn = new mysqli($servername, $username, $password, $db);
    // if($conn == true){
    //     echo 'Db Conected';
    // }
    // else{
    //     echo "try again noob";
    // }
    // die();
?>