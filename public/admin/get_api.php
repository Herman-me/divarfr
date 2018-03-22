<?php
  include 'auto.php';

  // Create an new safe obj this will check the password for us
  $safe = new safe('admin');

  if (isset($_GET['password'])) {
    $password = $_GET['password'];
    $check = $safe->check_log_admin($password); // Check the password

    if ($check) {
      $database = new Database;
      $api      = $database->get_api();
      $api      = $api->fetch_assoc();
      $api      = $api['api'];
      echo $api;
    }else
      echo 'رمز اشتباه دوباره امتحان کنید';

  }else{
    echo 'مشکل در سامانه';
  }



 ?>
