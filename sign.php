<?php

$name = $_POST['name'];

$email = $_POST['email'];

$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'database');

if($conn->connect_error) {
    die('connection failed :'.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into mydata(username, password, email)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$username, $password, $email);
    $stmt->execute();
    
    echo "<h1>Registration Successfully Completed</h1>";
    
    $stmt->close();
    
    $conn->close();
    
    header("Location: index.html");
    
}

?>