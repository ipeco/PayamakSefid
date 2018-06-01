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
	
	include_once("Classes/UploadExcel.php");

	// your PayamakSefid panel configuration
	$APIKey = '6311c7e7bfcd95a9e3acc4c';
	$SecretKey = 'R!O$$i3@5j%3!%O';
	
	@$File = $_FILES['File'];
	// Upload Excel data
	$SendData = array(
		'groupId' => 5721,
		'File' => $File
	);

	$PayamakSefid_UploadExcel = new PayamakSefid_UploadExcel($APIKey,$SecretKey);
	$UploadExcel = $PayamakSefid_UploadExcel->UploadExcel($SendData);
	echo "<pre>";
	var_dump($UploadExcel);
	
} catch (Exeption $e) {
	echo 'Error UploadExcel : '.$e->getMessage();
}

?>
 <form action="" method="post" enctype="multipart/form-data">
  <input type="File" name="File">
  <input type="submit">
</form> 