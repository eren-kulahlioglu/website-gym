<?php require 'header.php'; ?>

<?php  
$ayarlar=$baglanti->prepare("SELECT * from ayarlar where ayar_id=?");

$ayarlar->execute(array(0));  

$ayarcek = $ayarlar-> fetch(PDO::FETCH_ASSOC);



?>




    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>

        
          
        </section>

        <!-- general form elements -->


        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SİTE AYARLARINIZ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<!-- PANEL KULLANICI ICIN UYARI -->
            <?php    
            
            if (@$_GET["durum"]=="okey"){ ?>
              <h4 style="color:green; margin-left:20px"> İşlem Başarılı. </h4>
              <?php
            }
            elseif (@$_GET["durum"]=="no") {   ?>
              <h4 style="color:red; margin-left:20px"> İşlem Başarısız. </h4>
              <?php
              
            }
            
            
            ?>
<!-- PANEL KULLANICI ICIN UYARI -->

              <form action="islem/islem.php" method="POST" role="form">             
                
              
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name = "ayar_title" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_title']  ?>" placeholder="Lütfen Sitenizin Başlığınızı Giriniz" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="ayar_description" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_description']  ?>" placeholder="Lütfen Sitenizin Açıklamasını Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelime</label>
                    <input name="ayar_keywords" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_keywords']  ?>" placeholder="Lütfen Anahtar Kelimelerini Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Footer</label>
                    <input name="ayar_footer" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_footer']  ?>" placeholder="Lütfen Sitenizin Footerını Giriniz">
                  </div>
                  
                  
                  
                
                
                
                
                
                
                
                
                </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="gonder" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>