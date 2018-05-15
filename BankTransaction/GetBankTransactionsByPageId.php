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
	
	include_once("Classes/GetBankTransactionsByPageId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$PageId = 0;
	
	$PayamakSefid_GetBankTransactionsByPageId = new PayamakSefid_GetBankTransactionsByPageId($APIKey,$SecretKey);
	$GetBankTransactionsByPageId = $PayamakSefid_GetBankTransactionsByPageId->GetBankTransactionsByPageId($PageId);
	echo "<pre>";
	var_dump($GetBankTransactionsByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetBankTransactionsByPageId : '.$e->getMessage();
}

?>