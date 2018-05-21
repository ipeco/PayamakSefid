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
	
	include_once("Classes/AddOrUpdateContactGroup.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// add contacts Group data
	$ContactsGroup = array(
		'GroupId' => 0,
		'GroupName' => 'test',
		'Color' => '#000000'
	);
	
	$PayamakSefid_AddOrUpdateContactGroup = new PayamakSefid_AddOrUpdateContactGroup($APIKey,$SecretKey);
	$AddOrUpdateContactGroup = $PayamakSefid_AddOrUpdateContactGroup->AddOrUpdateContactGroup($ContactsGroup);
	echo "<pre>";
	var_dump($AddOrUpdateContactGroup);
	
} catch (Exeption $e) {
	echo 'Error AddOrUpdateContactGroup : '.$e->getMessage();
}

?>