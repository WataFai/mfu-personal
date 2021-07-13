<?php
require_once('Database.php');
$db = new Database('user-registration','root','12345','localhost'); // เชื่อมต่อฐานข้อมูล
$result = $db->insert('member',$_POST); // สั่ง Insert ข้อมูล users คือชื่อ Table ส่วน $_POST คือข้อมูลที่ส่งมาจากฟอร์มทั้งหมด

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'login.html'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
    echo "window.location = 'admin_form.php'; ";
	echo "</script>";
} 
?>