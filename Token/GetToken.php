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
	
	include_once("Classes/GetToken.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";

	$PayamakSefid_GetToken = new PayamakSefid_GetToken($APIKey,$SecretKey);
	$GetToken = $PayamakSefid_GetToken->GetToken();
	var_dump($GetToken);
	
} catch (Exeption $e) {
	echo 'Error GetToken : '.$e->getMessage();
}

?>