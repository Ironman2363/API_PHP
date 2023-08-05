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

$maAccount = $_POST['maAccount'];

$sql = "SELECT * FROM Bill WHERE maAccount='$maAccount'";
$result = $conn->query($sql);
$mang_bill = array();
   while($row = mysqli_fetch_assoc($result))
   {//đọc được dòng nào thì đưa vào mảng
      array_push($mang_bill, new Bill(
         $row['id'],
         $row['nameProduct'],
         $row['imgProduct'],
         $row['pirceProduct'],
         $row['tongTienProduct'],
         $row['maAccount'],
         $row['soluong']
      ));
   }
   //chuyển dữ liệu thành json
   echo json_encode($mang_bill);

class Bill{
    function Bill($id,$nameProduct,$imgProduct,$pirceProduct,$tongTienProduct,$maAccount,$soluong){
      $this->id = $id;
      $this->nameProduct = $nameProduct;
      $this->imgProduct = $imgProduct;
      $this->pirceProduct = $pirceProduct;
      $this->tongTienProduct = $tongTienProduct;
      $this->maAccount = $maAccount;
      $this->soluong = $soluong;
    }
}
?>