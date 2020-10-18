<?php require 'header.php'; ?>


<?php  
$trainer=$baglanti->prepare("SELECT * from trainer where id=:id");

$trainer->execute(array(
    'id'=>$_GET['id']
));  

$trainercek = $trainer-> fetch(PDO::FETCH_ASSOC) 






?>


    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>
    </section>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PT DÜZENLE</h3>
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
                    <label ></label> 
                <img style="width: 200px; height:200px; right: 60px;" src="resimler/pt/<?php echo $trainercek['resim']?>">
                  </div>
             
             
                <div class="card-body">

                <form action="islem/islem.php"  method="POST" >
    <input type="hidden" name="id" value="<?php echo $trainercek['id']?>">
    <input type="hidden" name="resim" value="<?php echo $trainercek['resim']?>">
                      <button name="ptsil" class= "btn btn-danger">Trainer Sil</button>

      </form> 



                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Resim Ekleyiniz">
                  </div>
           
          
<!-- işleme id gönderme -->
          <input type="hidden" name="id" value="<?php echo $trainercek['id']?>"> 
<!--işleme id gönderme -->      



                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad Soyad </label>
                    <input name="ad_soyad" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['ad_soyad'] ?>" placeholder="Lütfen Başlık Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Ünvan</label>
                    <input name="unvan" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['unvan'] ?>" placeholder="Lütfen Başlık Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra </label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['sira'] ?>" placeholder="Lütfen Sıra Giriniz">
                  </div>


                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Linki </label>
                    <input name="facebook" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['facebook'] ?>" placeholder="Lütfen Sıra Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">İnstagram Linki</label>
                    <input name="instagram" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['instagram'] ?>" placeholder="Lütfen Sıra Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Mail Adresi</label>
                    <input name="mail" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $trainercek['mail'] ?>" placeholder="Lütfen Sıra Giriniz">
                  </div>

                  
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="ptduzenle" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>