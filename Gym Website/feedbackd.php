<?php
    $name = $_POST['name'];
    $putfeedback = $_POST['putfeedback'];

     $conn = new mysqli ('localhost','root','','gym_database');
     if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into feedback(name,putfeedback) values (?,?)");

        $stmt->bind_param("ss", $name, $putfeedback);
        $stmt->execute();
        header("location: feedbacks.php");
        $stmt->close();
        $conn->close();
     }     
?>