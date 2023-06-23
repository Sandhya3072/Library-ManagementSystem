<?php
    $first = $_POST['first'];
    $last = $_POST['last'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $conn = new mysqli('localhost','root','','test');

    if($conn->connect_error){
        die('Connection Failed: ' . $conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into student(first,last,userName,password,roll,email,contact)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssi",$first,$last,$userName,$password,$roll,$email,$contact);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
     }



?>