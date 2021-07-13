<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "12345";
$db = "user-registration";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from adminpage where UserID like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0 ){
while($row = $result->fetch_assoc() ){
    $content = file_get_contents('Userinfo_list.php');
    echo $content;
}
} else {
	echo "0 records";
}

$conn->close();

?>