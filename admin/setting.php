<?php include 'auto.php';

  /**
  * crat nessasery obj
  */
  $safe = new safe;
  $db = new Database;
  $tel = new telegram; // Telegram bots
  $page = new pageindex;

  // Get info from tel
  $tel_info = $tel->get_ip_id(); //This will get vals for show to the user


  // Get web infoes
  $title = $page->show();
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body data-spy="scroll" data-target=".nav" data-offset="1">



<div class="container">
    <div class="row pad-top" style="background-color: transparent;">
        <div class="col-sm-4">
            <div class="card menu " >
                <img src="../HERMAN.png" alt="Avatar" style="width:100%">
                <div class="corent">
                    به مدیریت وبسایت ما خوش آمدید
                    در زیر امکانات بریاش شما نمایان خواهد بود. <br>
                    امید واریم بهترین استفاده ار از این اسکریپت داشته باشید
                </div><hr>
                <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="603">
                  <div class="list-group">
                    <li>  <a href="index.php" class="list-group-item "><i class="fab fa-telegram-plane"></i> آگهی های رایگان ثبت شده</a></li>
                      <li><a href="#" class="list-group-item"><i class="fas fa-money-bill-alt"></i> آگهی های پولی ارسال شده</a></li>
                      <li><a href="#" class="list-group-item active"> <i class="fas fa-cog"></i> تنظیمات</a></li> 
                    </div>
                </ul>
                    
            </div>

        </div>
        <div class="col-sm-8">
            <div class="card" style="">
                <div class="corent">
                    <h4><b>آگهی های رایگان ثبت شده</b></h4>
                    <p>در این قسمت همه ی آگهی های ثبت شده رایگان را خواهید دید
                        بعد از تائید به صورت خودکار بر روی چنل شما قرار خواهد گرفت
                    </p> <hr>


                    <div class="panel panel-default">
                      <div class="panel-heading">تنظیمات اصلی وبسایت <i class="fas fa-cog"></i></div>
                      <div class="panel-body">
                        <div class="form">
                           <form action="/action_page.php">
                            <div class="form-group">
                              <label for="email">تیتر وبسایت:</label>
                              <input required type="text" name="email" class="form-control" id="email" value="<?php echo $title[0] ?>">
                            </div>
                            <div class="form-group">
                              <label for="pwd">رمز خود را وارد کنید:</label> <span style="color:red;font-size: 12px;">برای ثبت تغییرات</span>
                              <input required type="password" name="pwd" class="form-control" id="pwd">
                            </div>
                            <button type="submit" class="btn btn-default">ثبت تغییرات </button>
                          </form>
                        </div>
                      </div>
                    </div>



                    <div class="panel panel-primary">
                      <div class="panel-heading">تنظیمات اتصالات تلگرام <i class="fab fa-telegram-plane"></i></div>
                      <div class="panel-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                              <label for="email">API BOT: <i class="fas fa-cog"></i></label>
                              <input style="direction: ltr;" type="text" name="email" class="form-control" id="email" value="<?php echo $tel_info['1'] ?>">
                            </div>
                            <div class="form-group">
                              <label for="email">ایدی چنل یا کانال شما: <i class="fas fa-cog"></i></label>
                              <input style="direction: ltr;" type="text" name="email" class="form-control" id="email" value="<?php echo $tel_info[0];?>">
                            </div>
                            <div class="form-group">
                              <label for="pwd">رمز خود را وارد کنید:</label> <span style="color:red;font-size: 12px;">برای ثبت تغییرات</span>
                              <input  type="password" name="pwd" class="form-control" id="pwd">
                            </div>
                            <button type="submit" class="btn btn-default">ثبت تغییرات </button>
                          </form>
                      </div>
                    </div>
                    

                </div>

            </div>

        </div>

    </div>
</div>






      <!-- Main js -->
    <script type="text/javascript" src="ass/js/main.js"></script>
  </body>
</html>
