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

$sql = "SELECT * FROM Doan WHERE maLoai=2";
$result = $conn->query($sql);
$mang_doan = array();
   while($row = mysqli_fetch_assoc($result))
   {//đọc được dòng nào thì đưa vào mảng
      array_push($mang_doan, new Doan(
         $row['maDoan'],
         $row['maLoai'],
         $row['tenDoan'],
         $row['gia'],
         $row['soLuong'],
         $row['avatar'],
         $row['moTa'],
         $row['chkFavourite']
      ));
   }
   //chuyển dữ liệu thành json
   echo json_encode($mang_doan);

class Doan{
    function Doan($maDoan,$maLoai,$tenDoan,$gia,$soLuong,$avatar,$moTa,$chkFavourite){
      $this->maDoan = $maDoan;
      $this->maLoai = $maLoai;
      $this->tenDoan = $tenDoan;
      $this->gia = $gia;
      $this->soLuong = $soLuong;
      $this->avatar = $avatar;
      $this->moTa = $moTa;
      $this->chkFavourite = $chkFavourite;
    }
}
?>