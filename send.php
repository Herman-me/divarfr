<?php

/**
* In this page we send the information of the agahi then 
* redirect to the page one with some messages
*/

include 'auto.php';
// Create safe object
$safe = new safe;


// Check if is set file or post informations 
if (isset($_POST['submit']) && !is_uploaded_file($_FILES['image']['tmp_name'])) {

	// Creating an array  
	$not_escaped_array = array(
		'full_name' =>$_POST['full_name'],
		'phone'=>$_POST['phone'],
		'title'=>$_POST['title'],
		'dis'=>$_POST['dis'],
		'price'=>$_POST['price'],
		'pic'=>'no-image.png');


	$db = new Database; //Creat new database connect
	$inserting = $db->submit_agahi($not_escaped_array);
	if ($inserting) {
		$msg=urlencode("آگهی شما به صورت کامل ثبت شد");
		header("Location: index.php?msg=".$msg);
	}else header("Location: index.php");


}else{
	echo "sala,";
	
	$image_name = $_FILES['image']['name'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	$image_size = $_FILES['image']['size'];

	$error = []; // for adding errors why upload ok is 0 or false

	define("UP_DIR", "admin/img/"); // address for move images there
	$target_file	 = UP_DIR.basename($_FILES['image']['name']);
	$upload_ok 		 = 1; // true
	$image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	/** Check file is image or not **/
	$check = getimagesize($_FILES['image']['tmp_name']);
	if ($check == FALSE) {
		$upload_ok = 0;
		array_push($error, 'فایل انتخابی معتبر نمیباشد');

	}
		


	// Check file size
	if ($image_size > 5000000) {
		$upload_ok = 0;
		array_push($error, "اندازه فایل شما بسیاز یاد است");
	}


	// If every thing that i need is ok :
	if ($upload_ok) {
		$move_uploaded_file_to_selected_dir = move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
		if ($move_uploaded_file_to_selected_dir) {
			array_push($error, "فایل ها با موفقیت آپلود شد");
		}

		// Creating an array  
		$not_escaped_array = array('full_name' =>$_POST['full_name'],'phone'=>$_POST['phone'],'title'=>$_POST['title'],'dis'=>$_POST['dis'],'price'=>$_POST['price']);

		$db = new Database; // Connect to database
		$inserting = $db->submit_agahi($not_escaped_array,$image_name); // Send informations width image name in database
		if ($inserting) {
			array_push($error, "آگهی شما ثب شد منتظر تایید و قرار گیری آن در چنل باشید");
			$msg = $error[0];
			header("Location: index.php?msg=".$msg);
		}else header("Location: index.php");
	}

	$safe->danger();

	
}
