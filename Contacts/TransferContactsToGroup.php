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
	
	include_once("Classes/TransferContactsToGroup.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Transfer Contacts data
	$TransferContacts = array(
		'ContactGroupRelationId' => array(0,1),
		'NewGroupId' => 0
	);
	
	$PayamakSefid_TransferContactsToGroup = new PayamakSefid_TransferContactsToGroup($APIKey,$SecretKey);
	$TransferContactsToGroup = $PayamakSefid_TransferContactsToGroup->TransferContactsToGroup($TransferContacts);
	echo "<pre>";
	var_dump($TransferContactsToGroup);
	
} catch (Exeption $e) {
	echo 'Error TransferContactsToGroup : '.$e->getMessage();
}

?>