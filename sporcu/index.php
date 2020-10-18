


    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.php">Anasayfa</a></li>
                <li><a href="./hakkimizda.php">Hakkımızda</a></li>
                <li><a href="./class-details.html">Hizmetler</a></li>
                <li><a href="./galeri.php">Galeri</a></li>
                <li><a href="./takimimiz.php">Takımımız</a></li>
                <li><a href="./bmi-calculator.html">Bmi</a></li>
   
                
                 </li>
                <li><a href="./iletisim.php">İletişim</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="<?php echo $ayarcek['ayar_facebook']?>"><i class="fa fa-facebook"></i></a>
  
            <a href="<?php echo $ayarcek['ayar_instagram']?>"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->







<?php include 'header.php' ?>
<?php include 'hero.php' ?>



<?php  
$ayarlar=$baglanti->prepare("SELECT * from ayarlar where ayar_id=?");

$ayarlar->execute(array(0));  

$ayarcek = $ayarlar-> fetch(PDO::FETCH_ASSOC);



?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $ayarcek['ayar_title'] ?></title>

    <meta name="author" content="E.K.">
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   

    

    

        <!-- ChoseUs Section Begin -->
        <section class="choseus-section spad">

        
<?php  
$hakkimizda=$baglanti->prepare("SELECT * from hakkimizda where id=?");

$hakkimizda->execute(array(0));  

$hakkimizdacek = $hakkimizda-> fetch(PDO::FETCH_ASSOC);



?>







        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span><?php echo $hakkimizdacek['baslik'] ?></span>
                        <h2><?php echo $hakkimizdacek['aciklama'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern Ekipmanlar</h4>
                        <p><?php echo $hakkimizdacek['ekipman'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Beslenme Planı</h4>
                        <p><?php echo $hakkimizdacek['beslenme'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Profesyonel Antreman Planı</h4>
                        <p><?php echo $hakkimizdacek['antreman'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>İhtiyaçlarınıza Özel</h4>
                        <p><?php echo $hakkimizdacek['ihtiyac'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

   

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>DAHA FAZLA BİLGİ ALMAK İÇİN ŞİMDİ İLETİŞİME GEÇ</h2>
                        <div class="bt-tips">SAĞLIK VE SPORUN BULUŞTUĞU YER.</div>
                        <a href="#" class="primary-btn  btn-normal">İLETİŞİM</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    

   

    

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>

<?php include 'contactsec.php' ?>
<?php include 'footer.php' ?>
