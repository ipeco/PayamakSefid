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
	
	include_once("Classes/GetTicketById.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$ticketId = 0;
	
	$PayamakSefid_GetTicketById = new PayamakSefid_GetTicketById($APIKey,$SecretKey);
	$GetTicketById = $PayamakSefid_GetTicketById->GetTicketById($ticketId);
	echo "<pre>";
	var_dump($GetTicketById);
	
} catch (Exeption $e) {
	echo 'Error GetTicketById : '.$e->getMessage();
}

?>