<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
// include('condbmb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$con=mysqli_connect("localhost","root","12345","user-registration");
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$a_id = $_REQUEST["ID"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM adminpage WHERE ID='$a_id'; ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

$sql = "DELETE FROM member WHERE ID='$a_id'; ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Delete Succesfuly');";
  echo "window.location = 'admin_list.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>