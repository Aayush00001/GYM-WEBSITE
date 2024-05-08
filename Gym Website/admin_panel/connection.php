<?php
    $con = mysqli_connect("localhost","root","","gym_database");
    if(mysqli_connect_error())
    {
        echo "cannot connected";
    }
?>