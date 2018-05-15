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
	$APIKey = '6311c7e7bfcd95a9e3acc4c';
	$SecretKey = 'R!O$$i3@5j%3!%O';
	
	// add contacts data
	$ContactsData = array(
		"ContactsDetails" => array(
			array(
				"Prefix" => "Mr",
				"FirstName" => "pejman",
				"LastName" => "kheyri",
				"Mobile" => 9129341912,
				"EmojiId" => 1
			),
			array(
				"Prefix" => "MRS",
				"FirstName" => "sample",
				"LastName" => "sample2",
				"Mobile" => 9120000000,
				"EmojiId" => 1
			)			
		),
		"GroupId" => 5622
	);
	
	$PayamakSefid_AddContacts = new PayamakSefid_AddContacts($APIKey,$SecretKey);
	$AddContacts = $PayamakSefid_AddContacts->AddContacts($ContactsData);
	echo "<pre>";
	var_dump($AddContacts);
	
} catch (Exeption $e) {
	echo 'Error AddContacts : '.$e->getMessage();
}

?>