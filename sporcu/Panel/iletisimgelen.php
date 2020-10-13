<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <h1 style=" color: #0A69EE; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px; "  
        class="m-0 ">-</h1>
          </div>
          
        </section>


        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 style=" color: #4894FF; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px; "  
        class="m-0 " 
                class="card-title">İletişim Mesajları</h3>

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
                      <th>Başlık</th>
                      <th>Telefon</th>
                      <th>Mesaj</th>
                      <th>Mail Adresi</th>
                      <th></th>
                      
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php  
$iletisim=$baglanti->prepare("SELECT * from iletisim order by id DESC");

$iletisim->execute();  

while ($iletisimcek = $iletisim-> fetch(PDO::FETCH_ASSOC)) {






?>
                
                 
                    <tr>
                      
                      <td><?php echo $iletisimcek['baslik']?></td>
                      <td><?php echo $iletisimcek['telefon']?></td>
                      <td><?php echo $iletisimcek['mesaj']?></td>
                      <td><?php echo $iletisimcek['mail']?></td>
                      <td></td>
                          <td style="float:right">
     <form action="islem/islem.php"  method="POST" >
    <input type="hidden" name="id" value="<?php echo $iletisimcek['id']?>">
     <button name="iletisimgelensil" class= "btn btn-danger">Sil</button>

      </form>
                         </td>

                      
                      
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