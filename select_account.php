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

$sql = "SELECT * FROM Account";
$result = $conn->query($sql);
$mang_doan = array();
   while($row = mysqli_fetch_assoc($result))
   {//đọc được dòng nào thì đưa vào mảng
      array_push($mang_doan, new Doan(
         $row['id'],
         $row['userName'],
         $row['fullName'],
         $row['email'],
         $row['phoneNumber'],
         $row['address'],
         $row['password']
      ));
   }
   //chuyển dữ liệu thành json
   echo json_encode($mang_doan);

class Doan{
    function Doan($id,$userName,$fullName,$email,$phoneNumber,$address,$password_u){
      $this->id = $id;
      $this->userName = $userName;
      $this->fullName = $fullName;
      $this->email = $email;
      $this->phoneNumber = $phoneNumber;
      $this->address = $address;
      $this->password = $password_u;
    }
}
?>