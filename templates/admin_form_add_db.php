<?php
$con=mysqli_connect("localhost","root","12345","user-registration") or die("Error: " . mysqli_error($con));
    
// $sql ="select * from member";
// $result=$con->query($sql);

$a_user = $_POST['ID'];
$a_pass = $_POST['Password'];
$a_name = $_POST['Name'];
$a_Status = $_POST['Status'];

$sql ="INSERT INTO member
    
    (ID, Password, Name , Status) 

    VALUES 

    ('$a_user', '$a_pass', '$a_name' ,'$a_Status')";
    
    $result = mysqli_query($con, $sql) ;
    if ($a_Status == 'USER'){
      if($result){
        $sql2 ="INSERT INTO adminpage 
        (ID,Name)
        VALUES
        ('$a_user','$a_name')";
        $result2 = mysqli_query($con, $sql2);
      }

    }
    
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('Add Succesfuly');";
      echo "window.location ='admin.php?act=add'; ";
      echo "</script>";
    } 
    else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php?act=add'; ";
      echo "</script>";
    }
?>

<!-- or die ("Error in query: $sql " . mysqli_error()) -->