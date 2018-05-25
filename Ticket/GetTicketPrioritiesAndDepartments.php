<?php

/**
 * @author Pejman Kheyri
 * @author Pejman Kheyri <pejmankheyri@gmail.com>
 * @copyright © 2018 The Ide Pardazan (ipe.ir) PHP Group. All rights reserved.
 * @link https://web.sms.ir/ Documentation of PayamakSefid RESTful API PHP sample.
 * @version 1.0
 */

try {
	
	date_default_timezone_set("Asia/Tehran");
	
	include_once("Classes/GetTicketPrioritiesAndDepartments.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
		
	$PayamakSefid_GetTicketPrioritiesAndDepartments = new PayamakSefid_GetTicketPrioritiesAndDepartments($APIKey,$SecretKey);
	$GetTicketPrioritiesAndDepartments = $PayamakSefid_GetTicketPrioritiesAndDepartments->GetTicketPrioritiesAndDepartments();
	echo "<pre>";
	var_dump($GetTicketPrioritiesAndDepartments);
	
} catch (Exeption $e) {
	echo 'Error GetTicketPrioritiesAndDepartments : '.$e->getMessage();
}

?>