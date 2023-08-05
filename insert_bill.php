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

$json = $_POST['jsonBill'];
$data = json_decode($json,true);
foreach ($data as $value) {
    
    $nameProduct = $value['nameProduct'];
    $imgProduct = $value['imgProduct'];
    $pirceProduct = $value['pirceProduct'];
    $tongTienProduct = $value['tongTienProduct'];
    $maAccount = $value['maAccount'];
    $soluong = $value['soluong'];

    $sql = "INSERT INTO Bill(id,nameProduct,imgProduct,pirceProduct,tongTienProduct,maAccount,soluong)
    VALUES (NULL,'$nameProduct','$imgProduct','$pirceProduct','$tongTienProduct','$maAccount','$soluong')"; 
    
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
    $conn->close();
?>