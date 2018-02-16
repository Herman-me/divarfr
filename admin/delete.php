<?php include 'auto.php';
// safe active
$safe = new safe();

// Database active
$db = new Database;

if ($_GET['id'] == 'all') {
	$delete_all = $db->delete_agahi();
	if ($delete_all) {
		header("Location: index.php");
	}
}else{
	$delete_all = $db->delete_agahi($_GET['id']);
	if ($delete_all) {
		$msg = "موفقیت آمیز بود";
		header("Location: index.php?msg=".urlencode($msg));
	}
}


