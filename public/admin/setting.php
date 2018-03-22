<?php include 'auto.php';
  /**
  * crat nessasery obj
  */
  $safe = new safe('admin');
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
                </div>
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
                           <form action="savesetting.php" method="post">
                            <div class="form-group">
                              <label for="email">تیتر وبسایت:</label>
                              <input required type="text" name="web_name" class="form-control" id="email" value="<?php echo $title[0] ?>">
                            </div>
                            <div class="form-group">
                              <label for="pwd">رمز خود را وارد کنید:</label> <span style="color:red;font-size: 12px;">برای ثبت تغییرات</span>
                              <input required type="password" name="pwd" class="form-control" id="pwd">
                            </div>
                            <button type="submit" name="main_sub" class="btn btn-default">ثبت تغییرات </button>
                          </form>
                        </div>
                      </div>
                    </div>





                    <div class="panel panel-primary">
                      <div class="panel-heading">تنظیمات اتصالات تلگرام <i class="fab fa-telegram-plane"></i></div>
                      <div class="panel-body">
                          <div class="hide_me" id="show_api_block">
                            <form action="savesettinsg.php" method="post">
                                <div class="form-group">
                                  <div class="alert alert-info"> در این قسمت رمز خود را وارد کنید و api برای شما نمایان میشود</div>
                                  <label for="email">نمایش API: <i class="fas fa-cog"></i></label>
                                  <input style="direction: ltr;" type="text" name="api_key" class="form-control" id="api_shower" value="LockAtMe" disabled>

                                <div class="form-group">
                                  <label for="pwd">رمز خود را وارد کنید:</label>
                                  <input  type="password" name="pwd" class="form-control" id="pwd3">
                                </div>
                              </form>
                              <a class="btn btn-danger" id="show_apis">ثبت تغییرات</a>
                          </div>
                        </div>


                        <form action="savesetting.php" method="post" id='set-back' class="show">
                            <div class="form-group">
                              <label for="email">API BOT: <i class="fas fa-cog"></i></label>
                              <div class="alert alert-danger">کلید تبادل شما(api) برای امنیت رمز گذاری شده ! برای دیده شدن روی <span style="color:#337ab7; cursor: help;" id="show_api">این کلیک کنید</span></div>
                              <input style="direction: ltr;" type="password" name="api_key" class="form-control" id="email" value="<?php echo hash('sha512', $tel_info['1']); ?>">
                                <div class="modal fade" id="myModal" role="dialog">


                            </div>
                            <div class="form-group">
                              <label for="email">ایدی چنل یا کانال شما: <i class="fas fa-cog"></i></label>
                              <input style="direction: ltr;" type="text" name="chatid" class="form-control" id="email" value="<?php echo $tel_info[0];?>">
                            </div>
                            <div class="form-group">
                              <label for="pwd">رمز خود را وارد کنید:</label> <span style="color:red;font-size: 12px;">برای ثبت تغییرات</span>
                              <input  type="password" name="pwd" class="form-control" id="pwd">
                            </div>
                            <button type="submit" name="tel_sub" class="btn btn-default">ثبت تغییرات </button>
                          </form>



                      </div>
                    </div>

                </div>


            </div>

        </div>

    </div>
</div>






      <!-- Main js -->
    <script type="text/javascript" src="../ass/js/main.js"></script>
  </body>
</html>
