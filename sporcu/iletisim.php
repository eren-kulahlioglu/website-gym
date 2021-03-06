<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">


    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php   
require 'Panel/islem/baglanti.php';


$ayarlar=$baglanti->prepare("SELECT * from ayarlar where ayar_id=?");

$ayarlar->execute(array(0));  

$ayarcek = $ayarlar-> fetch(PDO::FETCH_ASSOC);



?>



    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $ayarcek['ayar_title']?></title>

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
                <li><a href="index">Anasayfa</a></li>
                <li><a href="hakkimizda">Hakkımızda</a></li>
                <li><a href="galeri">Galeri</a></li>
                <li><a href="takimimiz">Takımımız</a></li>
                <li><a href="iletisim">İletişim</a></li>
                <li><a href="bmi-calculator">Bmi calculate</a></li>
                      >
            
                </li>
                
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
    
    require 'header.php';
    
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>İLETİŞİM</h2>
                        <div class="bt-option">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


   
    

  
    <head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>

    </head>

    <?php  
    
    if(@$_GET['durum']=="okey"){ ?>
    <div class="container">
    <div class="alert alert-success" role="alert">
      <h3 style="text-align:center;">Mesajınız iletilmiştir.</h3>
    </div>
    </div>
     
     
     <?php }elseif(@$_GET['durum']=="no"){?> 

     

    <div class="container">
    <div class="alert alert-danger" role="alert">
      <h3 style="text-align:center;">Mesajınız iletilirken hata oluştu.</h3>
    </div>
    </div>

<?php } ?>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>İLETİŞİM</span>
                        <h2>BİZE ULAŞ</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p><?php echo $ayarcek['ayar_adres']?></p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li><?php echo $ayarcek['ayar_telefon']?></li>
                                <li>-</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p><?php echo $ayarcek['ayar_mail']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="Panel/islem/islem.php" method="post" >
                            <input type="text" placeholder="Ad & Soyad" name="baslik" id="name">
                            <input type="text" placeholder="Email" name="mail" id="email">
                            <input type="text" placeholder="Telefon" name="telefon">
                            <textarea placeholder="Mesajınız" name="mesaj" id="message"></textarea>
                            <button name="mesajkaydet" type="submit">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.5247261323516!2d32.80735811533997!3d39.90727207942758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f389b5f083b%3A0x2bd5e3c965693688!2sGym%20Legend!5e0!3m2!1str!2str!4v1601768069118!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p><?php echo $ayarcek['ayar_adres']?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li><?php echo $ayarcek['ayar_telefon']?></li>
                            <li>-</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p><?php echo $ayarcek['ayar_mail']?></p>
                    </div>
                </div>
            </div>
        </div>
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