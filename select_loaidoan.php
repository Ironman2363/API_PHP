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

$sql = "SELECT * FROM LoaiDoan";
$result = $conn->query($sql);
$mang_loaidoan = array();
   while($row = mysqli_fetch_assoc($result))
   {//đọc được dòng nào thì đưa vào mảng
      array_push($mang_loaidoan, new LoaiDoan(
         $row['maLoai'],
         $row['tenLoai']
      ));
   }
   //chuyển dữ liệu thành json
   echo json_encode($mang_loaidoan);

class LoaiDoan{
    function LoaiDoan($maLoai,$tenLoai){
      $this->maLoai = $maLoai;
      $this->tenLoai = $tenLoai;
    }
}
?>