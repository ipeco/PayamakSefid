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
	
	include_once("Classes/GetOccasionalMessages.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$occasionalMessageCategoryId = 0;
	
	$PayamakSefid_GetOccasionalMessages = new PayamakSefid_GetOccasionalMessages($APIKey,$SecretKey);
	$GetOccasionalMessages = $PayamakSefid_GetOccasionalMessages->GetOccasionalMessages($occasionalMessageCategoryId);
	echo "<pre>";
	var_dump($GetOccasionalMessages);
	
} catch (Exeption $e) {
	echo 'Error GetOccasionalMessages : '.$e->getMessage();
}

?>