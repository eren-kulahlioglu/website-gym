<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <h1 style=" color: #4894FF; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px;"  
        class="m-0 ">-</h1>
          </div>
          
        </section>



        <?php    
            
            if ($_GET["durum"]=="okey"){ ?>
              <h4 style="color:green; margin-left:20px"> İşlem Başarılı. </h4>
              <?php
            }
            elseif ($_GET["durum"]=="no") {   ?>
              <h4 style="color:red; margin-left:20px"> İşlem Başarısız. </h4>
              <?php
              
            }
            
            elseif ($_GET["durum"]=="kullanicivar") {   ?>
              <h4 style="color:red; margin-left:20px"> Kullanıcı Zaten Kayıtlı. </h4>
              <?php
              
            }
            
            ?>


        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3  style=" color: #4894FF; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px;" 
                class="card-title">Kullanıcı İşlemleri</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                     
                      <th>Kullanıcı Ad Soyad</th>
                      <th>Kullanıcı Adı</th>
                      <th>Yetki</th>
                   
                      <th></th>
                      <th style="float:right;"><a href="kullaniciekle.php"><button style="width:147px;" class="btn btn-primary">Kullanıcı Ekle</button></a></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php  
$kullanici=$baglanti->prepare("SELECT * from kullanici");

$kullanici->execute();  

while ($kullanicicek = $kullanici-> fetch(PDO::FETCH_ASSOC)) {


?>
                
                 
                    <tr>
           
                      <td><?php echo $kullanicicek['adsoyad']?></td>
                      <td><?php echo $kullanicicek['kadi']?></td>
                      <td><?php echo $kullanicicek['yetki']?></td>
                      <td> </td>
 
                          <td style="float:right">
     <form action="islem/islem.php"  method="POST" >
    <input type="hidden" name="id" value="<?php echo $kullanicicek['id']?>">
   
                      <button name="kullanicisil" class= "btn btn-danger">Sil</button>

      </form> </td>

                      
                    </tr>

  <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
       
        </div>
    
<?php require 'footer.php'; ?> 