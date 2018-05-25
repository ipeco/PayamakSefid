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
	
	include_once("Classes/GetOccasionalMessageCategory.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
		
	$PayamakSefid_GetOccasionalMessageCategory = new PayamakSefid_GetOccasionalMessageCategory($APIKey,$SecretKey);
	$GetOccasionalMessageCategory = $PayamakSefid_GetOccasionalMessageCategory->GetOccasionalMessageCategory();
	echo "<pre>";
	var_dump($GetOccasionalMessageCategory);
	
} catch (Exeption $e) {
	echo 'Error GetOccasionalMessageCategory : '.$e->getMessage();
}

?>