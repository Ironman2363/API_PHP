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

$id = $_POST['id'];

$sql = "SELECT id FROM Account WHERE userName = '$id'";
$result = $conn->query($sql);
$mang_id = array();
   while($row = mysqli_fetch_assoc($result))
   {//đọc được dòng nào thì đưa vào mảng
      array_push($mang_id, new Account(
         $row['id']
      ));
   }
   //chuyển dữ liệu thành json
   echo json_encode($mang_id);

class Account{
    function Account($id){
      $this->maDoan = $id;
    }
}
?>