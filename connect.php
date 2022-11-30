<?php
	$Address= $_POST['Address'];
    $requested= $_POST['requested'];
	$Numberofdevices= $_POST['Numberofdevices'];
	
	//Database connection_aborted
	$conn= new mysqli('localhost','root','','waste management');
    if($conn->connect_error){
		die('connection Failed : '.$conn->connect_error);
	}else{
        $stmt = $conn->prepare("insert into	user details(Address, requested, Numberofdevices) values(?,?,?)");
		$stmt->bind_param("sii",$Address,$requested,$Numberofdevices);
		$stmt->execute();
		echo "request successful";
		$stmt->close();
		$conn->close();
?>