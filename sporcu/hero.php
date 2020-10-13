
    <?php    
    
    require 'header.php';

    ?>

<?php  
$slider=$baglanti->prepare("SELECT * from slider where id=?");

$slider->execute(array(12));  

$slidercek = $slider-> fetch(PDO::FETCH_ASSOC) 






?>

<!-- Hero Section Begin -->
<section class="hero-section">
        <div class="hs-slider owl-carousel">




            <div class="hs-item set-bg" data-setbg="Panel/resimler/<?php echo $slidercek['resim'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span><?php echo $slidercek['baslik'] ?></span>
                                <h1> <strong><?php echo $slidercek['baslik2'] ?></strong> </h1>
                                <a href="<?php echo $slidercek['link'] ?>" class="primary-btn"><?php echo $slidercek['button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php  
$slider=$baglanti->prepare("SELECT * from slider where id=?");

$slider->execute(array(13));  

$slidercek = $slider-> fetch(PDO::FETCH_ASSOC) 






?>

<div class="hs-item set-bg" data-setbg="Panel/resimler/<?php echo $slidercek['resim'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span><?php echo $slidercek['baslik'] ?></span>
                                <h1> <strong><?php echo $slidercek['baslik2'] ?></strong> </h1>
                                <a href="<?php echo $slidercek['link'] ?>" class="primary-btn"><?php echo $slidercek['button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    <!-- Hero Section End -->

    
 