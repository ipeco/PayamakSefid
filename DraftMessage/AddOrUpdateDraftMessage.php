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
	
	include_once("Classes/AddOrUpdateDraftMessage.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Draft Message data
	$DraftMessage = array(
		'Id' => 0,
		'Title' => 'title',
		'Message' => 'message'
	);
	
	$PayamakSefid_AddOrUpdateDraftMessage = new PayamakSefid_AddOrUpdateDraftMessage($APIKey,$SecretKey);
	$AddOrUpdateDraftMessage = $PayamakSefid_AddOrUpdateDraftMessage->AddOrUpdateDraftMessage($DraftMessage);
	echo "<pre>";
	var_dump($AddOrUpdateDraftMessage);
	
} catch (Exeption $e) {
	echo 'Error AddOrUpdateDraftMessage : '.$e->getMessage();
}

?>