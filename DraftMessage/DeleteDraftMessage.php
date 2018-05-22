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
	
	include_once("Classes/DeleteDraftMessage.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$id = 0;
	
	$PayamakSefid_DeleteDraftMessage = new PayamakSefid_DeleteDraftMessage($APIKey,$SecretKey);
	$DeleteDraftMessage = $PayamakSefid_DeleteDraftMessage->DeleteDraftMessage($id);
	echo "<pre>";
	var_dump($DeleteDraftMessage);
	
} catch (Exeption $e) {
	echo 'Error DeleteDraftMessage : '.$e->getMessage();
}

?>