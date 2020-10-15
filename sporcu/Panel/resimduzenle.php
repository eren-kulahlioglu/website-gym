<?php require 'header.php'; ?>


<?php  
$resim=$baglanti->prepare("SELECT * from resimler where id=:id");

$resim->execute(array(
    'id'=>$_GET['id']
));  

$resimcek = $resim-> fetch(PDO::FETCH_ASSOC) 






?>


    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>
    </section>

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">RESİM DÜZENLE</h3>
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
                <img style="width: 200px; height:200px; right: 60px;" src="resimler/galeri/<?php echo $resimcek['resim']?>">
                  </div>
             
             
                <div class="card-body">

                <form action="islem/islem.php"  method="POST" >
    <input type="hidden" name="id" value="<?php echo $resimcek['id']?>">
    <input type="hidden" name="resim" value="<?php echo $resimcek['resim']?>">
                      <button name="resimsil" class= "btn btn-danger">Resmi Sil</button>

      </form> 



                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1"   value="" placeholder="Lütfen Resim Ekleyiniz">
                  </div>
           
          
<!-- işleme id gönderme -->
          <input type="hidden" name="id" value="<?php echo $resimcek['id']?>"> 
<!--işleme id gönderme -->      



                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık </label>
                    <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $resimcek['baslik'] ?>" placeholder="Lütfen Başlık Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sıra </label>
                    <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $resimcek['sira'] ?>" placeholder="Lütfen Sıra Giriniz">
                  </div>

                  
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="resimduzenle" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>