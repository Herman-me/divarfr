<?php include 'auto.php'; 
    $safe = new safe('log');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>مهدی _ رحیمی</title>

    <!-- Bootstrap css style -->
    <link rel="stylesheet" href="../ass/css/bootstrap.css">
    <link rel="stylesheet" href="../ass/css/bootstrap-rtl.css">

    <!-- Fontawesome style adding -->
    <!-- <link rel="stylesheet" href="ass/css/font-awesome.min.css"> -->

    <!-- Adding animate css Style -->
    <link rel="stylesheet" href="../ass/css/animate.css">

    <!-- Adding custum style  -->
    <link rel="stylesheet" href="../ass/css/style.css">

    <!-- Font awesome new -->
    <script defer src="../ass/js/fontawesome-all.js"></script>

  </head>
  <body id="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 log_in">
                <form action="check_log.php" method="post">
                    <div class="form-group">
                        <label for="email">نام کاربری مدیریت:</label>
                        <input type="text" name="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">رمز عبور شما:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>
                        <button type="submit" name="submit" class="btn btn-info">ورود ...</button>
                        <a href="." style="width:48%;" class="btn btn-default">برگشت</a>
                </form> 
                    <div class="alert alert-info">
                        <p>در صورت تکرار های مکرر آیپی شما به لیست سفید اضافه شده و دیگر به این قسمت ها دسترسی نخواهید داشت لطفاً دقت کنید</p>
                    </div>
                </div>
            </div>
        </div>
      <!-- Main js -->
    <script type="text/javascript" src="ass/js/main.js"></script>
</body>
</html>
