<?php include 'auto.php';
$safe = new safe('log'); // new safe protection

// If isnot set post
if (!isset($_POST['submit'])) {
	$safe->danger();
	header("Location: ../index.php");
}

// Set Try one and two if user try to much server close
if (!isset($_SESSION['try'])) {
	$_SESSION['try'] = 1;
}

// If isset session try plus one it
$_SESSION['try']++;

// Insert values into database
if ($_POST['text'] != '' && $_POST['password'] != '' && !is_null($_POST['password'])) {
	$password = $_POST['password']; // Get the password form form
	$user 	  = $_POST['text']; // Get the username From form

	// give items to the class
	$check_log_admin = $safe->check_log_admin($password,$user);
	if ($check_log_admin) {
		$safe->admin_log_in();
		// Record the login into admin
		$record = $safe->record_log_in_admin();
		header("Location: index.php");

	}else{
		header('Location: log_in.php');
	}
}else header("Location: log_in.php");





