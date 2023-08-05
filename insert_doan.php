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

        $sql = "INSERT INTO Doan (maDoan,maLoai,tenDoan,gia,soLuong,avatar,moTa,chkFavourite)
        VALUES (13,1,'Phở bò',7000,1000,'https://vn-live-01.slatic.net/p/a4eb669ef018356b4df5e736ad9c0d29.jpg','ad',0),
         (14,1,'Thạch rau câu',50000,100,'https://vietfoods.com.vn/img/p/thach-rau-cau-newjoy-800g-tui-luoi-2-lop-p101.gif','ad',0),
         (15,1,'Kẹo nabati',20000,600,'https://cooponline.vn/wp-content/uploads/2020/10/banh-xop-nabati-richeese-phomai-goi-52g.jpg','ad',0),
         (16,2,'Nước nho',12000,200,'https://laz-img-sg.alicdn.com/p/e8642785a300c7398cf2541a30a9e242.jpg','ad',0),
         (17,2,'Nước dâu',1300,250,'https://ritajuice.vn/wp-content/uploads/2021/07/n%C6%B0%E1%BB%9Bc-ep-d%C3%A2u-%C4%91%C3%B3ng-chai-350ml.jpg','ad',0),
         (18,2,'Nước táo',1500,300,'https://minhcaumart.vn/media/com_eshop/products/8934673819398.jpg','ad',0)";
 
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>