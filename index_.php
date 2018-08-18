<!DOCTYPE html>
<?php
include './../functions.php';
$readTopMenuItems = readJsonObjects("./../json/topMenuBarItems.json", "");
$readContractCards = readJsonObjects("./../json/contractCards.json", "");
$readInsuranceCards = readJsonObjects("./../json/insuranceSection.json", "");
$readServicesCards = readJsonObjects("./../json/services.json", "");
$readComputerANDphones = readJsonObjects("./../json/computerANDphones.json", "");
?>

<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/logo-128x128-128x128.png" type="image/x-icon">
        <meta name="description" content="">
        <title>K1 Arabic</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/animatecss/animate.min.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <!--spicale Style-->
        <link rel="stylesheet" href="assets/main.css" type="text/css">

        <!--fonts Google Arabic-->
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">


    </head>

    <body class="">
        <section class="menu cid-r0CmzRQBNI" once="menu" id="menu1-3">

            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="#">
                                <img src="./../assets/images/logo-128x128.png" alt="" title="" style="height: 5.5rem;">
                            </a>
                        </span>
                        <span class="navbar-caption-wrap">
                            <a class="navbar-caption text-white display-4 standrArabicFont" href="#">K1 بالعربي</a>
                        </span>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Top Menu Items -->
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true" style="direction: rtl">
                        <?php foreach ($readTopMenuItems as $key => $value) { ?>
                            <?php if ($value["active"]) { ?>
                                <li class="nav-item">
                                    <a class="nav-link link text-white display-4 standrArabicFont" href="<?php echo $value["link"] ?>">
                                        <?php echo $value["name"]["ar"] ?> 
                                        <span class="<?php echo $value["icon"] ?> mbr-iconfont mbr-iconfont-btn"></span>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </nav>

        </section>

        <!--top slider--> 
        <section class="header12 cid-r0CtA7RLSk mbr-fullscreen mbr-parallax-background" id="header12-b">

            <div id="RRRDDD" class="mbr-overlay" style="opacity: 0.9; background-color: rgb(15, 118, 153);">
            </div>

            <div class="container  ">
                <div class="media-container">
                    <div class="col-md-12 align-center">
                        <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1 standrArabicFont">كـ 1 كمبيوتر</h1>
                        <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5 standrArabicFont">الخدمات المقدمة من مركز كـ 1 كمبيوتر</p>

                        <div class="icons-media-container mbr-white">

                            <div class="card col-12 col-md-6 col-lg-3">
                                <div class="icon-block">
                                    <a href="#features17-d" >
                                        <span class="mbr-iconfont mbrib-bookmark"></span>
                                    </a>
                                </div>
                                <h5 class="mbr-fonts-style display-5">عقود</h5>
                            </div>

                            <div class="card col-12 col-md-6 col-lg-3">
                                <div class="icon-block">
                                    <a href="#features7-e">
                                        <span class="mbr-iconfont mbri-briefcase"></span>
                                    </a>
                                </div>
                                <h5 class="mbr-fonts-style display-5">
                                    تأمين</h5>
                            </div>

                            <div class="card col-12 col-md-6 col-lg-3">
                                <div class="icon-block">
                                    <a href='#features8-h'>
                                        <span class="mbr-iconfont mbri-setting"></span>
                                    </a>
                                </div>
                                <h5 class="mbr-fonts-style display-5">
                                    خدمات</h5>
                            </div>

                            <div class="card col-12 col-md-6 col-lg-3">
                                <div class="icon-block">
                                    <a href="#features13-3">
                                        <span class="mbr-iconfont mbri-responsive"></span>
                                    </a>
                                </div>
                                <h5 class="mbr-fonts-style display-5">
                                    كمبيوتر وموبايل</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                <a href="#next">
                    <i class="mbri-down mbr-iconfont"></i>
                </a>
            </div>
            <div class="" id="contractsSeciton"></div>

        </section>


        <!-- Contract section -->
        <section class="features17 cid-r0CvFdDczU" id="features17-d">
            <div class="container">
                <div class="media-container-row">
                    <?php foreach ($readContractCards as $key => $value) { ?>
                        <div class="card p-3 col-12 col-md-<?php echo 12 / count($readContractCards) ?>">
                            <div class="card-wrapper" style="">
                                <div class="card-img">
                                    <img src="<?php echo $value["photoLink"] ?>" alt="Mobirise">
                                </div>
                                <div class="card-box">
                                    <h4 class=" card-title pb-3 mbr-fonts-style display-7 cntrText">
                                        <?php echo $value["title"]["ar"] ?>
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style display-7 rtlText">
                                        <?php echo read_docx($value["text"]["ar"]); ?>
                                    </p>
                                    <div class="rtlText" id="" style="" >
                                        <button onclick="location.href = '<?php echo $value["button"]["link"] ?>';"
                                                class="btn btn-sm btn-info " style="direction: rtl" >
                                                    <?php echo $value["button"]["name"]["ar"] ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!--incurance-->
        <section class="features7 cid-r0CxPF1QrY" id="features7-e">
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach ($readInsuranceCards as $key => $value) { ?>
                        <div class="card p-3 col-12 col-md-<?php echo 12 / count($readInsuranceCards) ?>">
                            <div class="card-img pr-2">
                                <span class="<?php echo $value["icon"] ?> mbr-iconfont"></span>
                            </div>
                            <div class="media">
                                <div class="card-box media-body">
                                    <h4 class="card-title py-3 mbr-fonts-style display-7 rtlText">
                                        <?php echo $value["title"]["ar"] ?>
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style display-7 rtlText">
                                        <?php
                                        $readedFile = read_docx($value["text"]["ar"]);
                                        echo $readedFile;
                                        ?>
                                    </p>
                                    <div onclick="location.href = '<?php // echo $value["button"]["link"]                   ?>';"
                                         class="" id="" sty="">
                                        <button class=" btn btn-sm btn-info " id="" style=""> <?php echo $value["button"]["name"]["ar"] ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!--Services section-->
        <section class="features8 cid-r0CyhpWAgC mbr-parallax-background" id="features8-h">

            <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(35, 35, 35);"> </div>

            <div class="container">
                <div class="media-container-row">
                    <?php foreach ($readServicesCards as $key => $value) { ?>
                        <div class="card col-12 col-md-<?php echo 12 / count($readServicesCards) ?>">
                            <div class="card-img">
                                <span class="<?php echo $value["icon"] ?> mbr-iconfont"></span>
                            </div>
                            <div class="card-box align-center">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <?php echo $value["title"]["ar"] ?>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <?php echo read_docx($value["text"]["ar"]) ?>
                                </p>
                                <div class="mbr-section-btn text-center">
                                    <a href=" <?php echo $value["button"]["link"] ?>" class="btn btn-sm btn-info display-4">
                                        <?php echo $value["button"]["name"]["ar"] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </section>

        <!--computer and mobile-->
        <section class="features13 cid-r0EaAdXTSt pt-5 pb-5" id="features13-3">

            <div class="container pt-3" >
                <div class="media-container-row container">
                    <?php foreach ($readComputerANDphones as $key => $value) { ?>
                        <div class="card col-12 col-md-<?php echo 12 / count($readComputerANDphones) ?>  align-center col-lg-4">
                            <div class="card-img">
                                <img src="<?php echo $value["img"] ?>" alt="Cinque Terre" class="rounded-circle">
                            </div>
                            <h4 class="card-title py-2 mbr-fonts-style display-5">
                                <?php echo $value["title"]["ar"] ?>
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <?php echo $value["text"]["ar"] ?>
                            </p>
                            <div class="mbr-section-btn text-center">
                                <a href="<?php echo $value["button"]["link"] ?>" class="btn btn-sm btn-info display-4">
                                    <?php echo $value["button"]["name"]["ar"] ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </section>


        <section class="cid-r0Cy5N2dgC" id="footer2-g">

            <div class="container-fluid">
                <div class="media-container-row content mbr-white">
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <p class="mbr-text leftText">
                        <strong>عنوان</strong>
                        <br>Burgwall 6,
                        <br>44135 Dortmung.
                        <br>
                        <br>
                        <br>
                        <strong>معلومات التواصل</strong>
                        <br>Email: k1computerservice@hotmail.de
                        <br>Maher: +49 (0) 176 65019 964
                        <br>Ahmad: +49 (0) 157 76960 139
                        <br>Tel :  +49 (0) 231 33006620 
                        <br>Fax : +49  (0) 231 33007152
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="google-map">
                            <iframe frameborder="0" style="border:0" 
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJd0X-f-IZuUcRKTVVLs-fbeU"
                                    allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="footer-lower">
                    <div class="media-container-row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="media-container-row mbr-white">
                        <div class="col-sm-12 copyright">
                            <p class="mbr-text mbr-fonts-style display-7">
                                © Copyright K1 Computer
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/dropdown/js/script.min.js"></script>
        <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
        <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
        <script src="assets/parallax/jarallax.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/theme/js/script.js"></script>

        <!-- external Script -->
        <script src="./assets/main.js"></script>


        <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
            <a style="text-align: center;">
                <i></i>
            </a>
        </div>
        <input name="animation" type="hidden">
    </body>

</html>