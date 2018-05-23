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
	
	include_once("Classes/GetSentMessagesMobileNumbers.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$lastId = 0;
	$batchKey = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
	
	$PayamakSefid_GetSentMessagesMobileNumbers = new PayamakSefid_GetSentMessagesMobileNumbers($APIKey,$SecretKey);
	$GetSentMessagesMobileNumbers = $PayamakSefid_GetSentMessagesMobileNumbers->GetSentMessagesMobileNumbers($lastId,$batchKey);
	echo "<pre>";
	var_dump($GetSentMessagesMobileNumbers);
	
} catch (Exeption $e) {
	echo 'Error GetSentMessagesMobileNumbers : '.$e->getMessage();
}

?>