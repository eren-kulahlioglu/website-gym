<?php   
error_reporting(0);
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
                        <a href="index.php">
                            <img style="margin-top:5px ;height:70px ; weight:20px" src="Panel/resimler/logo/<?php echo $ayarcek['ayar_logo']?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./">Anasayfa</a></li>
                            <li><a href="./hakkimizda">Hakkımızda</a></li>
                            
                            <li><a href="./galeri">GALERİ</a></li>
                            <li><a href="./takimimiz">TAKIMIMIZ</a></li>
                            <li><a href="./iletisim">İLETİŞİM</a></li>
                            <li><a href="./bmi-calculator">Bmi Hesapla</a></li>
                                  
                                   
                                   
                               
                         
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