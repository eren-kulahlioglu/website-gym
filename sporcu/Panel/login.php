<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GYM LEGEND ADMİN GİRİŞ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color:#FFD700;" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>GYM LEGEND</b></a>
  </div>
  <!-- /.login-logo -->
  <div  class="card">
    <div  class="card-body login-card-body">
      <p class="login-box-msg">Giriş</p>

    <?php  if($_GET['durum']=="cikis"){ 
      ?> <h4 style="color:green;"> Başarılı Çıkış Yaptınız İyi Günler </h4>   
    <?php }  ?>


    <?php  if($_GET['durum']==")izinsiz"){ 
      ?> <h4 style="color:green;"> Lütfen Bilgileri Giriniz </h4>   
    <?php }  ?>


    <?php  if($_GET['durum']=="no"){ 
      ?> <h4 style="color:red;"> Hatalı Bilgi </h4>   
    <?php }  ?>



      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="ad" minlength="5" maxlength="40" type="text" class="form-control" placeholder="Kullanıcı Adı" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" maxlength="25" type="password" class="form-control" placeholder="Şifre" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-4">
            <button name="kullanicigiris" type="submit" class="btn btn-info btn-block">Giriş</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      
  
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>




</body>


<p class="login-box-msg">Giriş işlemi sorunlarınız için '05458190306' destek hattından iletişime geçiniz.</p>
</html>
