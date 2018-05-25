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
	
	include_once("Classes/GetTicketsByPageId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$pageId = 0;
	
	$PayamakSefid_GetTicketsByPageId = new PayamakSefid_GetTicketsByPageId($APIKey,$SecretKey);
	$GetTicketsByPageId = $PayamakSefid_GetTicketsByPageId->GetTicketsByPageId($pageId);
	echo "<pre>";
	var_dump($GetTicketsByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetTicketsByPageId : '.$e->getMessage();
}

?>