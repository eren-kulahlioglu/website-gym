<?php require 'header.php'; ?>





    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>

        
          
        </section>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SLİDER EKLEME</h3>
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
                    <input name="foto" type="file" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Resim Ekleyiniz">
                  </div>



                  <div class="form-group">
                    <label for="exampleInputEmail1">Küçük Başlık </label>
                    <input name="kucuk_baslik" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Küçük Başlık Metnini Giriniz">
                  </div>

                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık 1 </label>
                    <input name="baslik1" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlığın Birinci Kısmını Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık 2</label>
                    <input name="baslik2" type="text" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Başlığın İkinci Kısmını Giriniz">
                  </div>
                  
                  
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık 3 </label>
                    <input name="baslik3" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlığın Üçüncü Kısmını Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Link </label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Link Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Buton İsim </label>
                    <input name="buton" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Buton İsmini Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra</label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Sıra Giriniz">
                  </div>

                 
                  
                  
                
                
                
                
                
                
                
                
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