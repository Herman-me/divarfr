<?php
include 'auto.php';
// Create safe object
$safe = new safe;

/**
* In this page we send the information of the agahi then 
* redirect to the page one with some messages
*/

// Check if is set file or post informations 
if (isset($_POST['submit'])) {

	// Creating an array  
	$not_escaped_array = array('full_name' =>$_POST['full_name'],'phone'=>$_POST['phone'],'title'=>$_POST['title'],'dis'=>$_POST['dis'],'price'=>$_POST['price']);
	$db = new Database;
	$inserting = $db->submit_agahi($not_escaped_array);
	if ($inserting) {
		$msg=urlencode("آگهی شما به صورت کامل ثبت شد");
		header("Location: index.php?msg=".$msg);
	}else echo "no";

}else{

	$_SESSION['danger'] = $_SESSION['user_ip_add'];
	header("Location: index.php");
}
