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
                <h3 class="card-title">İLETİŞİM AYARLARINIZ</h3>
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
                    <label for="exampleInputEmail1">Adres </label>
                    <input name="ayar_adres" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_adres']  ?>"placeholder="Lütfen Adresinizi Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon </label>
                    <input name="ayar_telefon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['ayar_telefon']  ?>" placeholder="Lütfen Telefon Numaranızı Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="ayar_mail" type="email" class="form-control" id="exampleInputEmail1"   value="<?php echo $ayarcek['ayar_mail']  ?>" placeholder="Lütfen E-mailinizi  Giriniz">
                  </div>
                  
                  
                  
                
                
                
                
                
                
                
                
                </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="iletisimkaydet" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>