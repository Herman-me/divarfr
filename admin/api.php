<?php


include 'auto.php';
$safe = new safe('admin');
header('Content-type: text/plain');

// Creat an txt for sending
$caption = "تیتر:\n".$_GET['title']."\n"."حدود قیمت:\n".$_GET['price']."\nتوضیحات:".$_GET['dis']."\nشماره تماس:".$_GET['phone']."\nآقای:".$_GET['full_name']."\n@divarfr" ;

$photo = 'img/'.$_GET['pic'];
$tel = new telegram;

$id = $tel->get_ip_id();
$id = $id[0];


// check if caption length is bigger than 200 character
if (strlen($caption) > 280) {
	$tel->send_image_tg($photo,$id);
	$tel->send_to_tg($caption);
}

// Else 
$tel->send_image_tg($photo,$caption);
header("Location: rew.php?id=".urlencode($_GET['id']));



