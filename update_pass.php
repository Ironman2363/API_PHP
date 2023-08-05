<?php
$servername = "localhost";
$username = "id21042953_dungptph25533";
$password = "Abc123456@";
$dbname = "id21042953_dungptph25533";

    // Create connection
    $conn = new mysqli($servername, $username_s, $password_s, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $sql = "UPDATE Account SET password = '$pass' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>