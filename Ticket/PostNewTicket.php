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
	
	include_once("Classes/PostNewTicket.php");

	// your PayamakSefid panel configuration
	$APIKey = '6311c7e7bfcd95a9e3acc4c';
	$SecretKey = 'R!O$$i3@5j%3!%O';
	
	$file = $_FILES['file'];
	// Post New Ticket data
	$SendData = array(
		'subject' => 'subject',
		'body' => 'body',
		'departmentId' => 1,
		'priorityId' => 1,
		'file' => $file['tmp_name']
	);

	$PayamakSefid_PostNewTicket = new PayamakSefid_PostNewTicket($APIKey,$SecretKey);
	$PostNewTicket = $PayamakSefid_PostNewTicket->PostNewTicket($SendData);
	echo "<pre>";
	var_dump($PostNewTicket);
	
} catch (Exeption $e) {
	echo 'Error PostNewTicket : '.$e->getMessage();
}

?>
 <form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit">
</form> 