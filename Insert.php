<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "index_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}


$pre_name = $_POST['pre_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$student_class = $_POST['student_class'];
$student_number = $_POST['student_number'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$status = $_POST['status'];


$sql = "INSERT INTO admin_mook (pre_name, first_name, last_name, student_class, student_number, email, user_name, password, status)
VALUES ('$pre_name', '$first_name', '$last_name', '$student_class', '$student_number', '$email', '$user_name', '$password', '$status')";

if ($conn->query($sql) === TRUE) {
  echo "บันทึกข้อมูลเรียบร้อยแล้ว!";
} else {
  echo "เกิดข้อผิดพลาด: " . $conn->error;
}

$conn->close();
?>
