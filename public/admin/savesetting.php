<?php
include 'auto.php';
$safe = new safe('admin'); // Creating safe obj

/**
* In this page we will save sttings and update it
**/

if (isset($_POST['main_sub'])) {

	$password = $_POST['pwd'];
	// In firs we will check the password for submition
	$title = $_POST['web_name'];
	$check = $safe->check_log_admin($password); // Check if password that enter is true or not

	if ($check) {
		$update = $safe->update_setting($title);
		if ($update) {
			header("Location: setting.php");
		}
		else header("Location: setting.php?error=".urlencode('unknow error'));
	}else header("Location: setting.php?msg=".urlencode("رمز اشتباه"));
}


// Else if we want to change the telegram options
elseif (isset($_POST['tel_sub'])) {

	$api 	  = $_POST['api_key']; // Get the api key
	$chatid   = $_POST['chatid'];
	$password = $_POST['pwd'];
	// In firs we will check the password for submition
	$check = $safe->check_log_admin($password);

	if ($check) {
		$update = $safe->update_setting_tel($api,$chatid);
		if ($update) 
			header("Location: setting.php");
		else
			header("Location: setting.php?no");
			
	}else header("Location: setting.php?msg=".urlencode("رمز اشتباه"));
}


