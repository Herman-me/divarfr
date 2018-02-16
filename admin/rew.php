<?php include 'auto.php';
    $safe = new safe();
    $db   = new Database;

    $id = 1;
    // Get id from url
    if (isset($_GET['id']))
        $id = $_GET['id'];

    

    // Get info from database
    $get_all_info = $db->get_all_info_id('free',$id);

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
  <body>



<div class="container">
    <div class="row pad-top" style="background-color: transparent;">
        <div class="col-sm-4">
            <div class="card">
                <img src="img/herman.png" alt="Avatar" style="width:100%">
                <div class="corent">
                    به مدیریت وبسایت ما خوش آمدید
                    در زیر امکانات بریاش شما نمایان خواهد بود. <br>
                    امید واریم بهترین استفاده ار از این اسکریپت داشته باشید
                </div><hr>
                    <div class="list-group">
                      <a href="#" class="list-group-item active"><i class="fab fa-telegram-plane"></i> آگهی های رایگان ثبت شده</a>
                      <a href="#" class="list-group-item"><i class="fas fa-money-bill-alt"></i> آگهی های پولی ارسال شده</a>
                      <a href="#" class="list-group-item"> <i class="fas fa-cog"></i> تنظیمات</a>
                    </div> 
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card" style="padding: 30px;">
                <div class="corent">
                    <h4><b>آگهی اقای <?php echo $get_all_info['full_name']; ?> <?php echo $get_all_info['title']?></b></h4> 
                    <p>
                    	در این قسمت شما این آگهی رو برسی میکنین و اگه دلتون خواست اون رو تائید میکنین
                    	اگرم نخواست که هیچی چون رایگانه :)
                    </p> <hr>

                    	<img src="img/<?php echo $get_all_info['pic']; ?>">

                    	<h4>توضیحات:</h4>
                        <p>
                            <?php echo $get_all_info['dis']; ?>
                        </p>

                    	<h4>قیمت : <br><span style="font-family: IRANSansWeb;font-size: 14px;"><?php echo $get_all_info['price']; ?></span></h4>
                    	<h4>شماره تلفن :</h4> <h5><?php echo $get_all_info['phone']; ?></h5>

                    	<div class="btn-group btn-group-justified" style="margin-top: 60px;">
						  <a href="api.php?full_name=<?php echo urlencode($get_all_info['full_name'])?>&title=<?php echo urlencode($get_all_info['title']) ?>&pic=<?php echo urlencode($get_all_info['pic']) ?>&price=<?php echo urlencode($get_all_info['price']) ?>&phone=<?php echo urlencode($get_all_info['phone']) ?>&dis=<?php echo urlencode($get_all_info['dis']) ?>&id=<?php echo urlencode($get_all_info['id']) ?>" class="btn btn-success">ارسال به چنل</a>
						  <a href="#" class="btn btn-danger">حذف</a>
						  <a href="." class="btn btn-primary">برگشت</a>
						</div> 

                </div>
            </div>
            
        </div>

    </div>
</div>






      <!-- Main js -->
    <script type="text/javascript" src="adminjs.js"></script>
  </body>
</html>

