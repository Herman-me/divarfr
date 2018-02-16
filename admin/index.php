<?php include 'auto.php';
  /**
  * Create an safe obj
  **/ $safe = new safe;

  //Creat db_object
  $db = new Database;

  // Get page 
  $page = 1;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $page = $safe->JUST_NUMBER($_GET['page']);
  }
  if ($page <= 0) {
    $page = 1;
  }

  // get ready for get rew
  $rew = $db->get_rew($page);




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
                <img src="../HERMAN.png" alt="Avatar" style="width:100%">
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
                    <h4><b>آگهی های رایگان ثبت شده</b></h4> 
                    <p>در این قسمت همه ی آگهی های ثبت شده رایگان را خواهید دید 
                        بعد از تائید به صورت خودکار بر روی چنل شما قرار خواهد گرفت
                    </p> <hr>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>از طرف</th>
                                <th>تیتر</th>
                                <th>خلاصه آگهی </th>
                                <th>دیدن یا خذف</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php while($row = $rew->fetch_assoc()): ?>
                              <tr>
                                <td><?php echo $row['full_name'];?></td>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo mb_substr($row['dis'], 0,20); ?> ...</td>
                                <td>
                                  <a href="rew.php?id=<?php echo $row['id'] ?>">
                                    <button class="btn btn-success" style="width:100%;">
                                     برسی 
                                    </button>
                                  </a>
                                </td>
                              </tr>
                            <?php endwhile; ?>
                            </tbody>
                          </table>
                    </div>

                </div>
                <div class="pager">
                  <li><a href="index.php?page=<?php echo $page+1 ?>">صفحه ی بعد</a></li>
                  <li><a href="index.php?page=<?php echo $page-1 ?>">صفحه ی قبل</a></li>
                </div>
            </div>
            
        </div>

    </div>
</div>






      <!-- Main js -->
    <script type="text/javascript" src="ass/js/main.js"></script>
  </body>
</html>
