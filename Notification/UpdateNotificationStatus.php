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
	
	include_once("Classes/UpdateNotificationStatus.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$id = 1;
	
	$PayamakSefid_UpdateNotificationStatus = new PayamakSefid_UpdateNotificationStatus($APIKey,$SecretKey);
	$UpdateNotificationStatus = $PayamakSefid_UpdateNotificationStatus->UpdateNotificationStatus($id);
	echo "<pre>";
	var_dump($UpdateNotificationStatus);
	
} catch (Exeption $e) {
	echo 'Error UpdateNotificationStatus : '.$e->getMessage();
}

?>