<?php require 'header.php'; ?>





    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>

        
          
        </section>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PT EKLE</h3>
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
                    <label for="exampleInputEmail1">Ad Soyad</label>
                    <input name="ad_soyad" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlık Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ünvan</label>
                    <input name="unvan" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Başlık Giriniz">
                  </div>


                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra </label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen Sıra Giriniz">
                  </div>




                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Linki </label>
                    <input name="facebook" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen facebook linkini giriniz.">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">instagram Linki </label>
                    <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen instagram linkini giriniz.">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Mail Adresi</label>
                    <input name="mail" type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Lütfen adresi giriniz.">
                  </div>


                  
                 
                  
                  
                  
                
                
                
                
                
                
                
                
                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="ptkaydet" type="submit" class="btn btn-success">Ekle</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>