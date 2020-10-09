<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <h1 style="color:green;"class="m-0 ">Slider Düzenleme İşlemleri</h1>
          </div>
          
        </section>


        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider</h3>

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
                      <th>küçük başlık</th>
                      <th>başlık 1</th>
                      <th>başlık 2</th>
                      <th>başlık 3</th>
                      <th>buton adı</th>
                      <th>sıra</th>
                      <th></th>
                      <th style="float:right;"><a href="sliderekle.php"><button style="width:150px;" class="btn btn-primary">ekle</button></a></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                 
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><span class="tag tag-danger"></span></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="float:right;"><button class= "btn btn-danger">Sil</button></td>
                      <td style="float:right;"><button class= "btn btn-success">Düzenle</button></td>
                      
                    </tr>

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