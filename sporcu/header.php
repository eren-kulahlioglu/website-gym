<?php   
require 'Panel/islem/baglanti.php';


$ayarlar=$baglanti->prepare("SELECT * from ayarlar where ayar_id=?");

$ayarlar->execute(array(0));  

$ayarcek = $ayarlar-> fetch(PDO::FETCH_ASSOC);



?>









<!-- Header Section Begin -->
<header class="header-section">
        <div class="container-fluid">
            <div class="row">






                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php">
                            <img style="margin-top:5px ;height:70px ; weight:20px" src="<?php echo $ayarcek['ayar_logo']?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Anasayfa</a></li>
                            <li><a href="./hakkimizda.php">Hakkımızda</a></li>
                            <li><a href="./hizmetler.php">HİZMETLER</a></li>
                            <li><a href="./gallery.html">GALERİ</a></li>
                            <li><a href="./team.html">TAKIMIMIZ</a></li>
                            <li><a href="./iletisim.php">İLETİŞİM</a></li>
                           
                        
                            <li><a href="#">Diğer</a>
                                <ul class="dropdown">
                                    
                                   
                                    <li><a href="./bmi-calculator.html">Bmi Hesapla</a></li>
                                    <li><a href="./blog.html">blog</a></li>
                                    <li><a href="./404.html">404</a></li>
                                   
                                   
                                </ul>
                            </li>
                         
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="<?php echo $ayarcek['ayar_facebook']?>"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a> 
                            <a href="<?php echo $ayarcek['ayar_instagram']?>"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->