<?php
include('connection_connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$name = $_POST["name"];
$surname = $_POST["surname"];
$ldentification_card = $_POST["ldentification_card"];
$user_name = $_POST["user_name"];
$pass_word = $_POST["pass_word"];
$user_role = $_POST["user_role"];


//เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO user (name, surname, ldentification_card, user_name, pass_word,user_role)
			 VALUES('$name', '$surname', '$ldentification_card', '$user_name', '$pass_word', '$user_role')";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

//ปิดการเชื่อมต่อ database
mysqli_close($conn);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Register Succesfuly');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to register again');";
    echo "</script>";
}
?>