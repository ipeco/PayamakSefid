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
	
	include_once("Classes/GetContactsFromLastId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$lastId = 0;
	
	$PayamakSefid_GetContactsFromLastId = new PayamakSefid_GetContactsFromLastId($APIKey,$SecretKey);
	$GetContactsFromLastId = $PayamakSefid_GetContactsFromLastId->GetContactsFromLastId($lastId);
	echo "<pre>";
	var_dump($GetContactsFromLastId);
	
} catch (Exeption $e) {
	echo 'Error GetContactsFromLastId : '.$e->getMessage();
}

?>