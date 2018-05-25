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
	
	include_once("Classes/CloseTicket.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$ticketId = 0;
	
	$PayamakSefid_CloseTicket = new PayamakSefid_CloseTicket($APIKey,$SecretKey);
	$CloseTicket = $PayamakSefid_CloseTicket->CloseTicket($ticketId);
	echo "<pre>";
	var_dump($CloseTicket);
	
} catch (Exeption $e) {
	echo 'Error CloseTicket : '.$e->getMessage();
}

?>