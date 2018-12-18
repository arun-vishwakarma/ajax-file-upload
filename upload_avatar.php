<?php
	echo '<pre>';print_r($_FILES);
	echo '<pre>';print_r($_POST);die;	
	$sourcePath = $_FILES['filedata']['tmp_name'];       // Storing source path of the file in a variable
	
	//echo base64_encode(file_get_contents($sourcePath));die;
	
	$targetPath = "upload/".$_FILES['filedata']['name']; // Target path where file is to be stored
	move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
	echo 'http://192.168.1.210/research/arun/ademo/upload_btn/'.$targetPath;die;
?>