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
	
	include_once("Classes/GetFrequentlyAskedQuestions.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
		
	$PayamakSefid_GetFrequentlyAskedQuestions = new PayamakSefid_GetFrequentlyAskedQuestions($APIKey,$SecretKey);
	$GetFrequentlyAskedQuestions = $PayamakSefid_GetFrequentlyAskedQuestions->GetFrequentlyAskedQuestions();
	echo "<pre>";
	var_dump($GetFrequentlyAskedQuestions);
	
} catch (Exeption $e) {
	echo 'Error GetFrequentlyAskedQuestions : '.$e->getMessage();
}

?>