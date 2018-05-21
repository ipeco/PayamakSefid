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
	
	include_once("Classes/GetContactsByGroupIdByPageId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$groupId = 0;
	$pageId = 0;
	
	$PayamakSefid_GetContactsByGroupIdByPageId = new PayamakSefid_GetContactsByGroupIdByPageId($APIKey,$SecretKey);
	$GetContactsByGroupIdByPageId = $PayamakSefid_GetContactsByGroupIdByPageId->GetContactsByGroupIdByPageId($groupId,$pageId);
	echo "<pre>";
	var_dump($GetContactsByGroupIdByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetContactsByGroupIdByPageId : '.$e->getMessage();
}

?>