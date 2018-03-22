<?php include 'auto.php';
    $page = new pageindex;
    $safe = new safe;
?>
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

    <!-- Include angular Js -->
    <script src="ass/js/angular.js" type="text/javascript"></script>

  </head>
  <body>

<div class="container-fluid">
    <div class="row header-background">
        <div class="col-sm-12">
          <h1> <i class="fab fa-telegram-plane"></i><?php echo $page->page_title; ?></h1>
            <div class="buttons">
                <button style="border-right:3px solid white;">ارجاع به کانال</button>
                <div class="dis">
                    <p>
                         این وب سایت برای معرفی کانال تلگرامی دیوار فریدونشهر ساخته شده تا <br>
                     تعامل با کاربران افزایش یابد
                     </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Msg div -->
<?php if (isset($_GET['msg'])): ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            $msg = $_GET['msg'];
                for ($i = 0; $i < count($msg) ; $i++ ) {
                    print_r($msg);
                }
                // $msg = preg_replace("/[<>slr]/", '', $_GET['msg']);
                // echo '<h3>'.$msg.'</h3>';
            ?>
            <p style="color:white;">لطلا منتظر باشید تا آگهی شما تایید شود. این فرایند 1 ساعت بیشتر زمان نخواهد برد</p>
        </div>
    </div>
</div>
<?php endif ?>
<div class="container">
    <div class="row pad-top bluetg">
        <div class="col-sm-4">
            <div class="card">
                <img src="HERMAN.png" alt="Avatar" style="width:100%">
                <div class="corent">
                    <h4><b>مهدی رحیمی</b></h4>
                    <p>تکنسین & برنامه نویس</p>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="koskeshekheng.jpg" alt="Avatar" style="width:100%">
                <div class="corent">
                    <h4><b>کوروش رحیمی</b></h4>
                    <p>باز ساز & گرافیست</p>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="jahya.jpg" alt="Avatar" style="width:100%">
                <div class="corent  ">
                    <h4><b>sadasdas</b></h4>
                    <p>ب</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 content">
            <div class="row">
                <div class="col-sm-12 disc">
                    <h4>درباره ی کانال ما</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                     <img src="dis.png">

                </div>
            </div>
            <div class="type">
                <div class="row">
                    <div class="col-sm-6 free">
                        <h3>ثبت آگهی رایگان</h3>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a href="subfree.php"><button style="border-right:3px solid white;">ثبت آگهی رایگان FREE</button></a>


                    </div>
                    <div class="col-sm-6 permi">
                        <h3>ثبت آگهی VIP</h3>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <button style="border-left:3px solid white;">ثبت آگهی VIP</button>

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
