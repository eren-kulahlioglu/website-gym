<!-- Main Sidebar Container -->
<aside style="background-color:black;"class="main-sidebar sidebar-dark-primary elevation-4">

<?php  
$ayarlar=$baglanti->prepare("SELECT * from ayarlar where ayar_id=?");

$ayarlar->execute(array(0));  

$ayarcek = $ayarlar-> fetch(PDO::FETCH_ASSOC);



?>



    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="resimler/logo/<?php echo $ayarcek ['ayar_logo']?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Gym Legend</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div style="background-color:#FFB713;"class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/adm.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a style="color:black;"href="#" class="d-block">Meriç Çonka</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <li class="nav-item">
            <a href="index.php" class="nav-link">
            <i style="color:white;"class="fas fa-home"></i>
              <p style="color:white;">
                Anasayfa
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="slider.php" class="nav-link">
            <i style="color:white;"class="fas fa-images"></i>
              <p style="color:white;">
                Slider
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="hakkimizda.php" class="nav-link">
            <i style="color:white;"class="fas fa-dumbbell"></i>
              <p style="color:white;">
                Hakkımızda
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="takimimiz.php" class="nav-link">
            <i style="color:white;" class="fas fa-users"></i>
              <p style="color:white;">
                Takımımız
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="iletisimgelen.php" class="nav-link">
            <i class="far fa-envelope"></i>
              <p style="color:white;">
                Mesajlar (İletişim)
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="resimler.php" class="nav-link">
            <i class="fas fa-camera"></i>
              <p style="color:white;">
                Resimler
                <span class="right badge badge-primary">Yeni</span>
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i style="color:white;" class="fas fa-user-cog"></i>
              <p style="color:white;">
                Genel Ayar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ayarlar.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Ayarları</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="kullanici.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kullanıcılar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="iletisim.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>İletişim Ayarları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sosyalmedya.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sosyal Medya Ayarları</p>
                </a>
              </li>
            </ul>
          </li>
          
          
            <li class="nav-item">
            <a href="cikis.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Çıkış Yap
              
              </p>
            </a>
          </li>
          
          
      
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
