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
    
    $maLoai = $_POST['maLoai'];
    $tenDoan = $_POST['tenDoan'];
    $gia = $_POST['gia'];
    $soLuong = $_POST['soLuong'];
    $avatar = $_POST['avatar'];
    $moTa = $_POST['moTa'];

    $sql = "INSERT INTO Doan (maDoan,maLoai,tenDoan,gia,soLuong,avatar,moTa,chkFavourite)
    VALUES (null,$maLoai,'$tenDoan',$gia,$soLuong,'$avatar','$moTa',0)";
 
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>