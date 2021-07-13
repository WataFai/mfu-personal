<?php
	session_start();
	$con=mysqli_connect("localhost","root","12345","user-registration");
	
	$strSQL = "SELECT * FROM member WHERE ID = '".mysqli_real_escape_string($con,$_POST['txtUsername'])."' 

	and Password = '".mysqli_real_escape_string($con,$_POST['txtPassword'])."'";

	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	
	if(!$objResult)
	{
			echo "ID and Password Incorrect!";
	}
	else
	{
			$_SESSION["ID"] = $objResult["ID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin.php?Id=" . $_SESSION['ID']);
			}
			else
			{
				header("location:user_page.php?Id=" . $_SESSION['ID']);
			}
	}
	mysqli_close();
?>