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
	
	include_once("Classes/DeleteGroupContacts.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Group Ids
	$GroupIds = array(
		'GroupIds' => array(0,1)
	);
	
	$PayamakSefid_DeleteGroupContacts = new PayamakSefid_DeleteGroupContacts($APIKey,$SecretKey);
	$DeleteGroupContacts = $PayamakSefid_DeleteGroupContacts->DeleteGroupContacts($GroupIds);
	echo "<pre>";
	var_dump($DeleteGroupContacts);
	
} catch (Exeption $e) {
	echo 'Error DeleteGroupContacts : '.$e->getMessage();
}

?>