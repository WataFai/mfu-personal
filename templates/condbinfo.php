<?php
	
    $con=mysqli_connect("localhost","root","12345","user-registration") or die("Error: " . mysqli_error($con));
 
    $sql ="select * from adminpage";
    $result=$con->query($sql);

    ?>