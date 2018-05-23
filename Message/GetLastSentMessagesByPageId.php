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
	
	include_once("Classes/GetLastSentMessagesByPageId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$pageId = 0;
	
	$PayamakSefid_GetLastSentMessagesByPageId = new PayamakSefid_GetLastSentMessagesByPageId($APIKey,$SecretKey);
	$GetLastSentMessagesByPageId = $PayamakSefid_GetLastSentMessagesByPageId->GetLastSentMessagesByPageId($pageId);
	echo "<pre>";
	var_dump($GetLastSentMessagesByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetLastSentMessagesByPageId : '.$e->getMessage();
}

?>