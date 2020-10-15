<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <h1 style=" color: #4894FF; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px;"  
        class="m-0 ">-</h1>
          </div>
          
        </section>


        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3  style=" color: #4894FF; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px;" 
                class="card-title">Resim İşlemleri</h3>

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
                      <th>resim</th>
                      <th>başlık</th>
                      <th>sıra</th>
                     
                      <th></th>
                      <th style="float:right;"><a href="resimekle.php"><button style="width:147px;" class="btn btn-primary">Resim Ekle</button></a></th>
                    </tr>
                  </thead> 
                  <tbody>
                    
 <?php  
$resimler=$baglanti->prepare("SELECT * from resimler");

$resimler->execute();  

while ($resimlercek = $resimler-> fetch(PDO::FETCH_ASSOC)) {

?>
                
                 
                    <tr>
                      <td> <img style="width: 90px; height: 90px"src="resimler/galeri/<?php echo $resimlercek['resim']?>"></td>
                      <td><?php echo $resimlercek['baslik']?></td>
                      <td><?php echo $resimlercek['sira']?></td>
     
                      <td></td>
                          <td style="float:right">
     <form action="islem/islem.php"  method="POST" >
    <input type="hidden" name="id" value="<?php echo $resimlercek['id']?>">
    <input type="hidden" name="resim" value="<?php echo $resimlercek['resim']?>">
                      <button name="resimlersil" class= "btn btn-danger">Sil</button>

      </form> </td>

                      <td style="float:right;"><a href="resimduzenle.php?id=<?php echo $resimlercek['id']?>"><button 
                      class= "btn btn-success">Düzenle</button></a></td>
                      
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