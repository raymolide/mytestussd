<?php 

	$sessionId = $_POST["sessionId"];
	$serviceCode=$_POST["serviceCode"];
	$phoneNumber= $_POST["phoneNumber"];
	$text = $_POST["text"];

	if ($text=="") {
		//First request (start with CON)

		$response = "\n CON what do you want to check \n";
		$response .= "1. My Account No \n";
		$response .= "2. My Phone Number \n";
	}elseif ($text=="1") {
		// Business Logic

		$response = "CON choose account information you wanto to view \n";
		$response .= "1. Account Number \n";
		$response .= "2. My Account Balance \n";
		
	}elseif ($text=="2") {
		$response .= " END your phone number is ".$phoneNumber;
	}elseif ($text=="1*1") {
		$accountNumber = "ACC1001";
		// second level response
		// terminal request (start with END)
		$response .= " End your phone number is ".$accountNumber;
	}elseif ($text=="1*2") {
		$balance = "200.000,00 MT";

		$response = "END yout balance is".$balance;
	}

	header("content-type; text/plain");
	echo $response;

?>