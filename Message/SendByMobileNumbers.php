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
	
	include_once("Classes/SendByMobileNumbers.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	// Send data
	$SendData = array(
		'Message' => 'test message',
		'MobileNumbers' => array(0,1),
		'CanContinueInCaseOfError' => true
	);
	
	$PayamakSefid_SendByMobileNumbers = new PayamakSefid_SendByMobileNumbers($APIKey,$SecretKey);
	$SendByMobileNumbers = $PayamakSefid_SendByMobileNumbers->SendByMobileNumbers($SendData);
	echo "<pre>";
	var_dump($SendByMobileNumbers);
	
} catch (Exeption $e) {
	echo 'Error SendByMobileNumbers : '.$e->getMessage();
}

?>