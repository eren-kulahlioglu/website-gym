
    <?php    
    
    require 'header.php';

    ?>




<!DOCTYPE html>
<html lang="zxx">

<head>



    <meta charset="UTF-8">

    
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $ayarcek['ayar_title'] ?></title>

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
                
                <li><a href="./galeri.php">Galeri</a></li>
                <li><a href="./takimimiz.php">Takımımız</a></li>
                <li><a href="./bmi-calculator.php">Bmi Hesapla</a></li>
   
                
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




<?php  
$hakkimizda=$baglanti->prepare("SELECT * from hakkimizda where id=?");

$hakkimizda->execute(array(0));  

$hakkimizdacek = $hakkimizda-> fetch(PDO::FETCH_ASSOC);



?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>HAKKIMIZDA</h2>
                        <div class="bt-option">
                            <a href="./index.html">Anasayfa</a>
                            <span>Hakkımızda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
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

    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about-video set-bg" data-setbg="img/about-us.jpg">
                       
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Hakkımızda</span>
                            <h2><?php echo $hakkimizdacek['vizyon_baslik'] ?> </h2>
                        </div>
                        <div class="at-desc">
                            <p><?php echo $hakkimizdacek['misyon'] ?> </p>
                        </div>
                        <div class="about-bar">
                            <div class="ab-item">
                                <p><?php echo $hakkimizdacek['vizyon'] ?></p>
                           
                                  
                             
                                </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->

    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>tAKIMIMIZ</span>
                            <h2>DENEYİMLİ PT'LERİMİZ</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">



            <?php  
$trainer=$baglanti->prepare("SELECT * from trainer order by sira ASC");

$trainer->execute();  

while ($trainercek = $trainer-> fetch(PDO::FETCH_ASSOC)) {

?>
                <div class="col-lg-4 col-sm-6">





                
                    <div class="ts-item set-bg" data-setbg="Panel/resimler/pt/<?php echo $trainercek['resim']?>">
                        <div class="ts_text">
                            <h4><?php echo $trainercek['ad_soyad']   ?></h4>
                            <span><?php echo $trainercek['unvan']   ?></span>
                            <div class="tt_social">
                                <a href="<?php echo $trainercek['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                                
                                
                                <a href="<?php echo $trainercek['instagram'] ?>"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa  fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

     
<?php   }  ?>
                
                
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <!-- Team Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Daha fazla BİLGİ almak İÇİN ŞİMDİ İLETİŞİME GEÇ</h2>
                        <div class="bt-tips">Sağlık ve Sporun Buluştuğu Yer.</div>
                        <a href="iletisim.php" class="primary-btn  btn-normal">İLETİŞİM</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>GÖRÜŞLER</span>
                        <h2>ÜYELERİMİZİN YORUMLARI</h2>
                    </div>
                </div>
            </div>
            <div class="ts_slider owl-carousel">
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/ilgaz.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Gerçekten çok kaliteli PT'ler.Özellikle Cem hocaya çok teşekkürler.<br /> .</p>
                                <h5>Ilgaz Şimşek</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/testimonial/testimonial-2.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    
    </div>
    <!-- Get In Touch Section End -->

    <?php   

    require 'footer.php';

    ?>

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