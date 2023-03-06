<?php

    $con = mysqli_connect("localhost","root","","electricalvlab");

    if(mysqli_connect_error()){
        echo "<script>alert('Cannot Connect to database')</script>";
        exit();
    } 

?>