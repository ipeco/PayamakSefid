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
	
	include_once("Classes/SearchContacts.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$prefix = "Mr";
	$firstname = "name";
	$lastname = "family";
	$mobile = 912xxxxxxx;
	$groupid = 0;
	$pageid = 0;
	
	$PayamakSefid_SearchContacts = new PayamakSefid_SearchContacts($APIKey,$SecretKey);
	$SearchContacts = $PayamakSefid_SearchContacts->SearchContacts($prefix,$firstname,$lastname,$mobile,$groupid,$pageid);
	echo "<pre>";
	var_dump($SearchContacts);
	
} catch (Exeption $e) {
	echo 'Error SearchContacts : '.$e->getMessage();
}

?>