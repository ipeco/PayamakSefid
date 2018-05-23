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
	
	include_once("Classes/GroupContactsDistinctCount.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Contacts Group data
	$ContactsGroupData = array(
		'ContactsGroupIds' => array(0,1),
		'ContactRelationIds' => array(0,1)
	);
	
	$PayamakSefid_GroupContactsDistinctCount = new PayamakSefid_GroupContactsDistinctCount($APIKey,$SecretKey);
	$GroupContactsDistinctCount = $PayamakSefid_GroupContactsDistinctCount->GroupContactsDistinctCount($ContactsGroupData);
	echo "<pre>";
	var_dump($GroupContactsDistinctCount);
	
} catch (Exeption $e) {
	echo 'Error GroupContactsDistinctCount : '.$e->getMessage();
}

?>