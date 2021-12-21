<?php
    include_once 'conn.inc.php';
    
    $light = $_POST['Light'];
    $temp = $_POST['Temperature'];
        
    $sql = "INSERT INTO DATA (Light, Temperature) 
                      VALUES ('$light', '$temp');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php");