<?php require 'header.php'; ?>





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






              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
                <div class="card-body">



                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Resim Ekleyiniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">baslik </label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlık Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">baslik 2 </label>
                    <input name="baslik2" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlık 2 Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Link  Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Button İsim </label>
                    <input name="button" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Button İsmi Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra </label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Sıra Giriniz">
                  </div>

                  
                 
                  
                  
                  
                
                
                
                
                
                
                
                
                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="sliderkaydet" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>