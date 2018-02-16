<?php include 'auto.php';
$safe = new safe;
header('Content-type: text/plain');
// Creat an txt for sending
$caption = "تیتر:\n".$_GET['title']."\n"."حدود قیمت:\n".$_GET['price']."\nتوضیحات:".$_GET['dis']."\nشماره تماس:".$_GET['phone']."\nآقای:".$_GET['full_name']."\n@divarfr" ;
$photo = 'img/'.$_GET['pic'];
$tel = new telegram;
$tel->send_image_tg($photo,$caption);


header("Location: rew.php?id=".urlencode($_GET['id']));



