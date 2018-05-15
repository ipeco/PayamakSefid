<?php

/**
 * @author Pejman Kheyri
 * @author Pejman Kheyri <pejmankheyri@gmail.com>
 * @copyright © 2017 The Ide Pardazan (ipe.ir) PHP Group. All rights reserved.
 * @link http://sms.ir/ Documentation of sms.ir RESTful API PHP sample.
 * @version 1.1
 */

try {
	
	date_default_timezone_set("Asia/Tehran");
	
	include_once("Classes/AddContactToCustomerClub.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// contact information
	$Prefix = 'Mr';
	$FirstName = 'FirstName';
	$LastName = 'LastName';
	$Mobile = '091xxxxxxxx';
	$BirthDay = '1370/01/01';
	$CategoryId = '';

	$SmsIR_AddContactToCustomerClub = new SmsIR_AddContactToCustomerClub($APIKey,$SecretKey);
	$AddContactToCustomerClub = $SmsIR_AddContactToCustomerClub->AddContactToCustomerClub($Prefix, $FirstName, $LastName, $Mobile, $BirthDay, $CategoryId);
	var_dump($AddContactToCustomerClub);
	
} catch (Exeption $e) {
	echo 'Error AddContactToCustomerClub : '.$e->getMessage();
}

?>