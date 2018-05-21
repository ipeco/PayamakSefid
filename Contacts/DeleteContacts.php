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
	
	include_once("Classes/DeleteContacts.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// contact Ids
	$ContactIds = array(
		'Ids' => array(0,1)
	);
	
	$PayamakSefid_DeleteContacts = new PayamakSefid_DeleteContacts($APIKey,$SecretKey);
	$DeleteContacts = $PayamakSefid_DeleteContacts->DeleteContacts($ContactIds);
	echo "<pre>";
	var_dump($DeleteContacts);
	
} catch (Exeption $e) {
	echo 'Error DeleteContacts : '.$e->getMessage();
}

?>