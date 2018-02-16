<?php  session_start();?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>مهدی _ رحیمی</title>

    <!-- Bootstrap css style -->
    <link rel="stylesheet" href="ass/css/bootstrap.css">
    <link rel="stylesheet" href="ass/css/bootstrap-rtl.css">

    <!-- Fontawesome style adding -->
    <!-- <link rel="stylesheet" href="ass/css/font-awesome.min.css"> -->

    <!-- Adding animate css Style -->
    <link rel="stylesheet" href="ass/css/animate.css">

    <!-- Adding custum style  -->
    <link rel="stylesheet" href="ass/css/style.css">

    <!-- Font awesome new -->
    <script defer src="ass/js/fontawesome-all.js"></script>

  </head>
  <body>




<div class="container">
    <div class="row">
        <div class="col-sm-12 content free-sub">
            <div class="row">
                <div class="col-sm-6 free">
                    <p>
                        <div class="free-form-sub ">
                            <form action="send.php" method="post">
                                <label>نام و نام خوانوادگی</label><br>
                                <input required="true" type="text" name="full_name"><br>
                                <label>شماره تلفن :</label><br> 
                                <input required type="number" name="phone"><br><hr>
                                <label> تیتر آگهی شما :</label><br>
                                <input required type="text" name="title"><br>
                                <label>توضیحات:</label><br>
                                <textarea required rows="10" name="dis"></textarea><br>
                                <label>حدود قیمت</label><br>
                                <select name="price">
                                    <option selected disabled>لطفا یکی را انتخاب کنید</option>
                                    <option value="پایین 1 ملیون تومان">پایین 1 ملیون تومان</option>
                                    <option value="بالای یک ملیون تومان">بالای یک ملیون تومان</option>
                                </select><br>
                                <label>عکس آگهی:</label><br>
                                <input required type="file" name="image"><br><hr>
                                <!-- <input style="padding:10px;" type="submit" value="ثبت آگهی" class="btn btn-primary" name="submit"> -->
                                <div class="btn-group btn-group-justified" style="margin-top: 60px;">
                                <input style="width:100%;padding:5px;" type="submit" value="ثبت آگهی" class="btn btn-danger" name="submit">
                                  <a href="." style="width:auto; padding:0;" class="btn btn-info">برگشت</a>
                                </div>  
                            </form>
                        </div>
                    </p>
                </div>
                <div class="col-sm-6 disc header-background infofree" style="border-radius: 0;">
                    <h1> <i class="fab fa-telegram-plane"></i>کانال رسمی دیوار فریدونشهر</h1>
                    <p style="width: 90%;">
                        بعد از ثبت ، آگهی شما در صف انتظار قرار گیری در چنل خواهد بود 
                        و باید توسط مدیر ناظر تائید شود پس انتظار قرار گیری سریع آن را روی وبسایت نداشته باشید <br>
                        برای قرار گیری مستقیم آگهی شما روی چنل ما
                        اگهی VIP را تهییه کنید
                    </p>
                    <button>ثبت آگهی VIP و قرار گیری مستقیم آگهی شما</button>
                </div>
            
            </div>
            
        </div>
    </div>
</div>




      <!-- Main js -->
    <script type="text/javascript" src="ass/js/main.js"></script>
  </body>
</html>
