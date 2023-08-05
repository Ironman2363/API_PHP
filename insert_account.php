<?php

$servername = "localhost";
$username = "id21042953_dungptph25533";
$password = "Abc123456@";
$dbname = "id21042953_dungptph25533";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

    $userName_u = $_POST['userName'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $password_u = $_POST['password'];

    $sql = "INSERT INTO Account(id, userName, fullName, email, phoneNumber, address, password)
    VALUES (NULL,'$userName_u','$fullName', '$email', '$phoneNumber', '$address' ,'$password_u')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>