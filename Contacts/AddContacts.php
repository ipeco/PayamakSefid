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
	
	include_once("Classes/AddContacts.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// add contacts data
	$ContactsData = array(
		'ContactsDetails' => array(
			array(
				'Prefix' => 'Mr',
				'FirstName' => 'Name',
				"LastName" => 'Family',
				'Mobile' => 912xxxxxxx,
				'EmojiId' => '1'
			),
			array(
				'Prefix' => 'Mr',
				'FirstName' => 'Name',
				"LastName" => 'Family',
				'Mobile' => 912xxxxxxx,
				'EmojiId' => '1'
			)
		),
		'GroupId' => 0
	);
	
	$PayamakSefid_AddContacts = new PayamakSefid_AddContacts($APIKey,$SecretKey);
	$AddContacts = $PayamakSefid_AddContacts->AddContacts($ContactsData);
	echo "<pre>";
	var_dump($AddContacts);
	
} catch (Exeption $e) {
	echo 'Error AddContacts : '.$e->getMessage();
}

?>