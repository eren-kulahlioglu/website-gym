<?php require 'header.php'; ?>





    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>

        
          
        </section>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kullanıcı Ayarlarınız</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
<!-- PANEL KULLANICI ICIN UYARI -->
<?php    
            
            if ($_GET["durum"]=="okey"){ ?>
              <h4 style="color:green; margin-left:20px"> İşlem Başarılı. </h4>
              <?php
            }
            elseif ($_GET["durum"]=="no") {   ?>
              <h4 style="color:red; margin-left:20px"> İşlem Başarısız. </h4>
              <?php
              
            }
            
            
            ?>
<!-- PANEL KULLANICI ICIN UYARI -->






              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                <div class="card-body">



                  <div class="form-group">
                    <label >Ad Soyad </label>
                    <input name="adsoyad" type="text" class="form-control"  value="" placeholder="Lütfen Kullanıcı Ad Soyad Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label >Kullanıcı Adı</label>
                    <input name="kadi" type="text" class="form-control"   value="" placeholder="Lütfen Kullanıcı Adı  Giriniz">
                  </div>

                  <div class="form-group">
                    <label>Yetki</label>
                    <input name="yetki" type="text" class="form-control"  value="" placeholder="Lütfen '1' veya '2' Giriniz">
                  </div>


                  <div class="form-group">
                    <label >Şifre </label>
                    <input name="sifre" type="text" class="form-control"  value="" placeholder="Lütfen Şifre Giriniz">
                  </div>

                  
                 
                  
                  
                  
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="kullanicikaydet" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>