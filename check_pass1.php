<?php
session_start();
require("connect.php");
$liplatE = $_SESSION['liplate'];
$prO = $_SESSION['pro'];

	$query_pass = mysqli_query($conn,"SELECT * FROM datacar WHERE licenseplate = '$liplatE' AND province = '$prO'");
	

	if (mysqli_num_rows($query_pass) > 0) 
	{ 
		$result_pass = "พบข้อมูล";
	} 
	else
	{ 
		$sqlQR = "SELECT * FROM dataqr  WHERE licenseplate = '$liplatE' AND province = '$prO'";
		
			$result2 = mysqli_query($conn,$sqlQR);
		
		if (mysqli_num_rows($result2) > 0 ) {

		       $result_pass = "พบข้อมูลชั่วคราว";
		 
			   } 
		else {
				$result_pass = "ไม่พบข้อมูล";
	   } 
					
		
		   
	 }

		
	    	
		
	// $result_pass = mysqli_num_rows($query_pass);
	//เอาจำนวน row ที่ค้นหาได้ใส่ในตัวแปร data type = array
	$data = array(
		'found_status' => $result_pass
    );
	echo json_encode($data);
?>