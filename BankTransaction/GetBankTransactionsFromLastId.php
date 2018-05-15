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
	
	include_once("Classes/GetBankTransactionsFromLastId.php");

	// your PayamakSefid panel configuration
	$APIKey = 'enter your api key ...';
	$SecretKey = 'enter your secret key ...';
	
	$LastId = 0;
	
	$PayamakSefid_GetBankTransactionsFromLastId = new PayamakSefid_GetBankTransactionsFromLastId($APIKey,$SecretKey);
	$GetBankTransactionsFromLastId = $PayamakSefid_GetBankTransactionsFromLastId->GetBankTransactionsFromLastId($LastId);
	echo "<pre>";
	var_dump($GetBankTransactionsFromLastId);
	
} catch (Exeption $e) {
	echo 'Error GetBankTransactionsFromLastId : '.$e->getMessage();
}

?>