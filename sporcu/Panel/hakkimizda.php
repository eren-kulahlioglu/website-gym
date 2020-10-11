<?php require 'header.php'; ?>

<?php  
$hakkimizda=$baglanti->prepare("SELECT * from hakkimizda where id=?");

$hakkimizda->execute(array(0));  

$hakkimizdacek = $hakkimizda-> fetch(PDO::FETCH_ASSOC);



?>




    <!-- Main content -->
    <section class="content">
        <div class="row">
       
        </div>

        
          
        </section>

        <!-- general form elements -->


        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">HAKKIMIZDA</h3>
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
                    <label for="exampleInputEmail1">Başlık</label>
                    <input name = "baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['baslik']  ?>" placeholder="Lütfen Başlığınızı Giriniz" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['aciklama']  ?>" placeholder="Lütfen Açıklama Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Vizyon Başlık</label>
                    <input name="vizyon_baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['vizyon_baslik']  ?>" placeholder="Lütfen PT Kısmı İçin Başlığı Giriniz">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Vizyon</label>
                    <input name="vizyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['vizyon']  ?>" placeholder="Lütfen Vizyonunuzu Giriniz">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Misyon</label>
                    <input name="misyon" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['misyon']  ?>" placeholder="Lütfen Misyonunuzu Giriniz">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekipman</label>
                    <input name="ekipman" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['ekipman']  ?>" placeholder="Lütfen Ekipman Açıklamasını Giriniz">
                  </div>

                
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Beslenme</label>
                    <input name="beslenme" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['beslenme']  ?>" placeholder="Lütfen Beslenme Açıklamasını Giriniz">
                  </div>

                
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Antreman</label>
                    <input name="antreman" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['antreman']  ?>" placeholder="Lütfen Antraman Açıklamasını Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">İhtiyaç</label>
                    <input name="ihtiyac" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['ihtiyac']  ?>" placeholder="Lütfen Ekstra Hizmet Açıklamasını Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">PT Başlık</label>
                    <input name="pt_baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['pt_baslik']  ?>" placeholder="Lütfen PT Kısmı İçin Başlığı Giriniz">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">PT-1 İSİM</label>
                    <input name="pt_name1" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['pt_name1']  ?>" placeholder="Lütfen PT ismi Giriniz">
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputEmail1">PT-2 İSİM</label>
                    <input name="pt_name2" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['pt_name2']  ?>" placeholder="Lütfen PT ismi Giriniz">
                  </div> 


                  <div class="form-group">
                    <label for="exampleInputEmail1">PT-3 İSİM</label>
                    <input name="pt_name3" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $hakkimizdacek['pt_name3']  ?>" placeholder="Lütfen PT ismi Giriniz">
                  </div>


                
                
                </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name ="hakkimizdakaydet" type="submit" class="btn btn-success">Gönder</button>
                </div>
              </form>
            </div>
       
        </div>
    
<?php require 'footer.php'; ?>