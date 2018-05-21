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
	
	include_once("Classes/DeleteContactGroup.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$groupId = 0;
	
	$PayamakSefid_DeleteContactGroup = new PayamakSefid_DeleteContactGroup($APIKey,$SecretKey);
	$DeleteContactGroup = $PayamakSefid_DeleteContactGroup->DeleteContactGroup($groupId);
	echo "<pre>";
	var_dump($DeleteContactGroup);
	
} catch (Exeption $e) {
	echo 'Error DeleteContactGroup : '.$e->getMessage();
}

?>