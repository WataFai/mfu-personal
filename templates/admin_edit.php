<?php
	error_reporting(0);
    $con=mysqli_connect("localhost","root","12345","user-registration");
	global $con;
    // $sc ="select * from adminpage";
    // $re=$con->query($sc);

    $iID = $_POST["ID"];
	$iStartdate =$_POST["Startdate"];
	$iNameschool = $_POST["Nameschool"];
	$iposition = $_POST["position"];
	$iSubject = $_POST["Subject"];
	$iCodesubject = $_POST["Codesubject"];
	$ianu = $_POST["anu"];
	$icodeanu = $_POST["codeanu"];
	$iapprovebyaca = $_POST["approvebyaca"];
	$ianumeeting = $_POST["anumeeting"];
	$ipassaca=$_POST["Passaca"];	
	$inumaca = $_POST["numaca"];	
	$idateaca = $_POST["dateaca"];
	$ipassboard =$_POST["Passboard"];
    $inumboard = $_POST["numboard"];
	$idateboard = $_POST["dateboard"];
	$isenddoc = $_POST["senddoc"];
	$iPassreader1 = $_POST["Passreader1"];
	$iPassreader2 = $_POST["Passreader2"];
	$iPassreader3 = $_POST["Passreader3"];
	$ipassaca1=$_POST["Passaca1"];
	$inumaca1 = $_POST["numaca1"];
	$idateaca1 = $_POST["dateaca1"];
	$iPassuc = $_POST["Passuc"];
	$inumuc= $_POST["numuc"];	
    $idateuc = $_POST["dateuc"];
    $inumcm = $_POST["numcm"];
	$idatecm = $_POST["datecm"];
	$iusedatecm = $_POST["usedatecm"]; 
	// $iStartdate = $_POST["Startdate"];
	
    
    $sql = "UPDATE adminpage SET  
            
			Startdate = '$iStartdate',
			Nameschool = '$iNameschool',
			position = '$iposition',
			Subject = '$iSubject',
			Codesubject = '$iCodesubject',
			anu = '$ianu',
			codeanu = '$icodeanu',
			approvebyaca='$iapprovebyaca' , 
			anumeeting='$ianumeeting' ,
			Passaca ='$ipassaca',
			numaca='$inumaca' ,
			dateaca='$idateaca'  ,
			Passboard='$ipassboard',
            numboard='$inumboard' ,
			dateboard='$idateboard' , 
			senddoc='$isenddoc' ,
			Passreader1 ='$iPassreader1',
			Passreader2 ='$iPassreader2',
			Passreader3 ='$iPassreader3',
			Passaca1 ='$ipassaca1',
			numaca1 ='$inumaca1',
			dateaca1 ='$idateaca1',
			Passuc = '$iPassuc',
			numuc='$inumuc' ,
			dateuc='$idateuc',
            numcm='$inumcm' ,
			datecm='$idatecm' ,
			usedatecm='$iusedatecm'
			-- Startdate='$iStartdate'
			where ID='$iID'
             ";
            // echo $sql;
   $result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
 
// mysqli_close($con); 
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";

	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
    echo "window.location = 'admin_form.php'; ";
	echo "</script>";
	
	
} 
?>
