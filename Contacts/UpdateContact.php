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
	
	include_once("Classes/UpdateContact.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Contact data
	$ContactData = array(
		'ContactGroupRelationId' => 0,
		'Mobile' => 912xxxxxxx,
		'Prefix' => 'mr',
		'FirstName' => 'name',
		'LastName' => 'family',
		'GroupId' => 0,
		'EmojiId' => '1'
	);
	
	$PayamakSefid_UpdateContact = new PayamakSefid_UpdateContact($APIKey,$SecretKey);
	$UpdateContact = $PayamakSefid_UpdateContact->UpdateContact($ContactData);
	echo "<pre>";
	var_dump($UpdateContact);
	
} catch (Exeption $e) {
	echo 'Error UpdateContact : '.$e->getMessage();
}

?>