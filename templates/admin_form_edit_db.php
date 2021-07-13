<?php
$con=mysqli_connect("localhost","root","12345","user-registration") or die("Error: " . mysqli_error());


$a_user = $_POST['ID'];
$a_pass = $_POST['Password'];
$a_name = $_POST['Name'];
$a_Status = $_POST['Status'];

$sql = "UPDATE member SET  

      Password='$a_pass', 
			Name='$a_name',
			-- Status='$a_Status'
      WHERE ID ='$a_user'
      ";
      
 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
 
      if($result){
        $sql2 ="UPDATE member SET
        Name = '$a_name'
        WHERE ID = '$a_user'";
        $result2 = mysqli_query($con, $sql2) ;
      }

    
    mysqli_close($con);    
       
    if($result){
      echo "<script>";
      echo "alert('Add Succesfuly');";
      echo "window.location ='admin_list.php'; ";
      echo "</script>";
    } 
    else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin_list.php'; ";
      echo "</script>";
    }
?>

<!-- or die ("Error in query: $sql " . mysqli_error()) -->