

<?php    

require 'baglanti.php';

session_start();



if(isset($_POST['gonder'])) {
   
  $kaydet=$baglanti->prepare("UPDATE ayarlar SET
  
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_footer=:ayar_footer
    WHERE ayar_id=0");

    $update=$kaydet -> execute(array(

        'ayar_title' =>$_POST['ayar_title'],
        'ayar_description' =>$_POST['ayar_description'],
        'ayar_keywords' =>$_POST['ayar_keywords'],
        'ayar_footer'=>$_POST['ayar_footer']
    ));
  

if ($update) {
    Header("Location:../ayarlar.php?durum=okey");
}else {
    Header("Location:../ayarlar.php?durum=no");
}

} 

// İLETİŞİM

if(isset($_POST['iletisimkaydet'])) {
   

    
    $kaydet=$baglanti->prepare("UPDATE ayarlar SET
    
      ayar_adres=:ayar_adres,
      ayar_telefon=:ayar_telefon,
      ayar_mail=:ayar_mail
      WHERE ayar_id=0");
  
      $update=$kaydet -> execute(array(
  
          'ayar_adres' =>$_POST['ayar_adres'],
          'ayar_telefon' =>$_POST['ayar_telefon'],
          'ayar_mail' =>$_POST['ayar_mail']
         
      ));
    
  
  if ($update) {
      Header("Location:../iletisim.php?durum=okey");
  }else {
      Header("Location:../iletisim.php?durum=no");
  }
  
  } 


  // SOSYAL MEDYA


  if(isset($_POST['sosyalkaydet'])) {
   

    
    $kaydet=$baglanti->prepare("UPDATE ayarlar SET
    
      ayar_facebook=:ayar_facebook,
      ayar_instagram=:ayar_instagram,
      ayar_twitter=:ayar_twitter
      WHERE ayar_id=0");
  
      $update=$kaydet -> execute(array(
  
          'ayar_facebook' =>$_POST['ayar_facebook'],
          'ayar_instagram' =>$_POST['ayar_instagram'],
          'ayar_twitter' =>$_POST['ayar_twitter']
         
      ));
    
  
  if ($update) {
      Header("Location:../sosyalmedya.php?durum=okey");
  }else {
      Header("Location:../sosyalmedya.php?durum=no");
  }
  
  } 



    // HAKKIMIZDA


    if(isset($_POST['hakkimizdakaydet'])) {
   

    
        $kaydet=$baglanti->prepare("UPDATE hakkimizda SET
        
        baslik=:baslik,
        aciklama=:aciklama,
        vizyon=:vizyon,
        misyon=:misyon,
        vizyon_baslik=:vizyon_baslik,
        ekipman=:ekipman,
        beslenme=:beslenme,
        antreman=:antreman,
        ihtiyac=:ihtiyac,
        pt_baslik=:pt_baslik,
        pt_name1=:pt_name1,
        pt_name2=:pt_name2,
        pt_name3=:pt_name3
    
          WHERE id=0");
      
          $update=$kaydet -> execute(array(
      
              'baslik' =>$_POST['baslik'],
              'aciklama' =>$_POST['aciklama'],
              'vizyon' =>$_POST['vizyon'],
              'misyon' =>$_POST['misyon'],
              'vizyon_baslik' =>$_POST['vizyon_baslik'],
              'ekipman' =>$_POST['ekipman'],
              'beslenme' =>$_POST['beslenme'],
              'antreman' =>$_POST['antreman'],
              'ihtiyac' =>$_POST['ihtiyac'],
              'pt_baslik' =>$_POST['pt_baslik'],
              'pt_name1' =>$_POST['pt_name1'],
              'pt_name2' =>$_POST['pt_name2'],
              'pt_name3' =>$_POST['pt_name3']

              
             
          ));
        
      
      if ($update) {
          Header("Location:../hakkimizda.php?durum=okey");
      }else {
          Header("Location:../hakkimizda.php?durum=no");
      }
      
      } 
    

    // Hakkımızda


    // Foto İçin
    
    if(isset($_POST['sliderkaydet'])) {
        

    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    

    



    $kaydet=$baglanti->prepare("INSERT INTO slider SET
    
    baslik=:baslik,
    sira=:sira,
    baslik2=:baslik2,
    link=:link,
    button=:button,
    resim=:resim");



    $insert=$kaydet -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira'],
        'baslik2' =>$_POST['baslik2'],
        'link' =>$_POST['link'],
        'button' =>$_POST['button'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {
    Header("Location:../slider.php?durum=okey");
}else {
    Header("Location:../slider.php?durum=no");
}

} 

// slider-duzenle


if(isset($_POST['sliderduzenle'])) {


    if($_FILES['resim'] ["size"]>0) {



    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    


    $kaydet=$baglanti->prepare("UPDATE slider SET
    
    baslik=:baslik,
    sira=:sira,
    baslik2=:baslik2,
    link=:link,
    button=:button,
    resim=:resim
    
    WHERE id={$_POST['id']}
    ");



    $insert=$kaydet -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira'],
        'baslik2' =>$_POST['baslik2'],
        'link' =>$_POST['link'],
        'button' =>$_POST['button'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {
    Header("Location:../slider.php?durum=okey");
}else {
    Header("Location:../slider.php?durum=no");
}

} 
    else {

    $duzenle=$baglanti->prepare("UPDATE slider SET
    
    baslik=:baslik,
    sira=:sira,
    baslik2=:baslik2,
    link=:link,
    button=:button
    
    WHERE id={$_POST['id']}
    ");



    $insert=$duzenle -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira'],
        'baslik2' =>$_POST['baslik2'],
        'link' =>$_POST['link'],
        'button' =>$_POST['button']
    
        
        ));


if ($insert) {
    Header("Location:../slider.php?durum=okey");
}else {
    Header("Location:../slider.php?durum=no");
}

}

// slider-duzenle

}

//SİL

if (isset($_POST['slidersil'])) {

    $sil=$_POST['resim'];
    unlink("../resimler/$sil");


    
    $sil=$baglanti->prepare("DELETE from slider where id=:id");
    
    $sil->execute(array(
        'id'=>$_POST['id']
    ));  
if ($sil) {
    Header("Location:../slider.php?durum=ok");
}
else{
    Header("Location:../slider.php?durum=no");
}

}


//Düzenle'den Sil

if (isset($_POST['resimsil'])) {

    $sil=$_POST['resim'];
    unlink("../resimler/$sil");


    
    $sil=$baglanti->prepare("DELETE from slider where resim=:resim");
    
    $sil->execute(array(
        'resim' =>$resimyolu
    ));  
if ($sil) {
    Header("Location:../sliderduzenle.php?durum=ok");
}
else{
    Header("Location:../sliderduzenle.php?durum=no");
}

}




//LOGO


if(isset($_POST['logokaydet'])) {
        

    $uploads_dir = '../resimler/logo';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    

    



    $kaydet=$baglanti->prepare("UPDATE ayarlar SET
    
    
    ayar_logo=:ayar_logo");

    $update=$kaydet -> execute(array(

    'ayar_logo' =>$resimyolu
        
     ));
  

if ($update) {
    Header("Location:../ayarlar.php?durum=okey");
}else {
    Header("Location:../ayarlar.php?durum=no");
}

} 


// Mesaj İşlemi

if(isset($_POST['mesajkaydet'])) {
   $kaydet=$baglanti->prepare("INSERT INTO iletisim SET
   baslik=:baslik,
   mesaj=:mesaj,
   mail=:mail,
   telefon=:telefon
   ") ;

   $insert=$kaydet->execute(array(
       'baslik'=>$_POST['baslik'],
       'mesaj'=>$_POST['mesaj'],
       'mail'=>$_POST['mail'],
       'telefon'=>$_POST['telefon']
       

   ));


   if ($insert) {
    Header("Location:../../iletisim.php?durum=okey");
}else {
    Header("Location:../../iletisim.php?durum=no");
}
}

if(isset($_POST['iletisimgelensil'])) {
 
    $sil=$baglanti->prepare("DELETE from iletisim where id=:id");
    
    $sil->execute(array(
        'id'=>$_POST['id']
    ));  
if ($sil) {
    Header("Location:../iletisimgelen.php?durum=ok");
}
else{
    Header("Location:../iletisimgelen.php?durum=no");
}

}


//RESİMLER



if(isset($_POST['resimkaydet'])) {
  
    
    $uploads_dir = '../resimler/galeri';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    

    

    $kaydet=$baglanti->prepare("INSERT INTO resimler SET
    
    baslik=:baslik,
    sira=:sira,
    resim=:resim");

     $insert=$kaydet -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {
    Header("Location:../resimler.php?durum=okey");
}else {
    Header("Location:../resimler.php?durum=no");
}

} 




//Resimler Düzenle


if(isset($_POST['resimduzenle'])) {


    if($_FILES['resim'] ["size"]>0) {



    $uploads_dir = '../resimler/galeri';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    


    $kaydet=$baglanti->prepare("UPDATE resimler SET
    
    baslik=:baslik,
    sira=:sira,
    resim=:resim
    
    WHERE id={$_POST['id']}
    ");



    $insert=$kaydet -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {

    $sil=$_POST['resim'];
    unlink("../resimler/galeri/$sil");


    Header("Location:../resimler.php?durum=okey");
}else {
    Header("Location:../resimler.php?durum=no");
}

} 
    else {

    $duzenle=$baglanti->prepare("UPDATE resimler SET
    
    baslik=:baslik,
    sira=:sira
    WHERE id={$_POST['id']}
    ");



    $insert=$duzenle -> execute(array(

        'baslik' =>$_POST['baslik'],
        'sira' =>$_POST['sira']
        
         ));


if ($insert) {
    Header("Location:../resimler.php?durum=okey");
}else {
    Header("Location:../resimler.php?durum=no");
}

}

// resimler düzenle

}

//SİL

if (isset($_POST['resimlersil'])) {

    $sil=$_POST['resim'];
    unlink("../resimler/galeri/$sil");


    
    $sil=$baglanti->prepare("DELETE from resimler where id=:id");
    
    $sil->execute(array(
        'id'=>$_POST['id']
    ));  
if ($sil) {
    Header("Location:../resimler.php?durum=ok");
}
else{
    Header("Location:../resimler.php?durum=no");
}

}



// PT EKLE


if(isset($_POST['ptkaydet'])) {
  
    
    $uploads_dir = '../resimler/pt';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    

    

    $kaydet=$baglanti->prepare("INSERT INTO trainer SET
    
    ad_soyad=:ad_soyad,
    sira=:sira,
    unvan=:unvan,
    facebook=:facebook,
    instagram=:instagram,
    mail=:mail,
    resim=:resim");

     $insert=$kaydet -> execute(array(

        'ad_soyad' =>$_POST['ad_soyad'],
        'sira' =>$_POST['sira'],
        'unvan' =>$_POST['unvan'],
        'facebook' =>$_POST['facebook'],
        'instagram' =>$_POST['instagram'],
        'mail' =>$_POST['mail'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {
    Header("Location:../takimimiz.php?durum=okey");
}else {
    Header("Location:../takimimiz.php?durum=no");
}

} 





// PT Düzenle


if(isset($_POST['ptduzenle'])) {


    if($_FILES['resim'] ["size"]>0) {



    $uploads_dir = '../resimler/pt';
    @$tmp_name = $_FILES['resim'] ["tmp_name"];
    @$name = $_FILES['resim'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    


    $kaydet=$baglanti->prepare("UPDATE trainer SET
    
    ad_soyad=:ad_soyad,
    sira=:sira,
    unvan=:unvan,
    facebook=:facebook,
    instagram=:instagram,
    mail=:mail,
    resim=:resim
    
    WHERE id={$_POST['id']}
    ");



    $insert=$kaydet -> execute(array(

        'ad_soyad' =>$_POST['ad_soyad'],
        'sira' =>$_POST['sira'],
        'unvan' =>$_POST['unvan'],
        'facebook' =>$_POST['facebook'],
        'instagram' =>$_POST['instagram'],
        'mail' =>$_POST['mail'],
        'resim' =>$resimyolu
        
        ));
  

if ($insert) {

    $sil=$_POST['resim'];
    unlink("../resimler/pt/$sil");


    Header("Location:../takimimiz.php?durum=okey");
}else {
    Header("Location:../takimimiz.php?durum=no");
}

} 
    else {

    $duzenle=$baglanti->prepare("UPDATE trainer SET
    
    ad_soyad=:ad_soyad,
    sira=:sira,
    unvan=:unvan,
    facebook=:facebook,
    instagram=:instagram,
    mail=:mail
    WHERE id={$_POST['id']}
    ");



    $insert=$duzenle -> execute(array(

        'ad_soyad' =>$_POST['ad_soyad'],
        'sira' =>$_POST['sira'],
        'unvan' =>$_POST['unvan'],
        'facebook' =>$_POST['facebook'],
        'instagram' =>$_POST['instagram'],
        'mail' =>$_POST['mail']

        
        
         ));


if ($insert) {
    Header("Location:../takimimiz.php?durum=okey");
}else {
    Header("Location:../takimimiz.php?durum=no");
}

}

// PT düzenle

}

//PT SİL

if (isset($_POST['ptsil'])) {

    $sil=$_POST['resim'];
    unlink("../resimler/pt/$sil");


    
    $sil=$baglanti->prepare("DELETE from trainer where id=:id");
    
    $sil->execute(array(
        'id'=>$_POST['id']
    ));  
if ($sil) {
    Header("Location:../takimimiz.php?durum=ok");
}
else{
    Header("Location:../takimimiz.php?durum=no");
}

}






// ADMİN GİRİŞ--GUVENLİK

if (isset($_POST['kullanicigiris'])) {
    $ad= htmlspecialchars($_POST['ad']) ;        
    $sifre= htmlspecialchars($_POST['sifre']);


    if ($ad && $sifre) {
        $kullanicisor=$baglanti->prepare("SELECT * FROM kullanici where kadi=:ad and sifre=:sifre");
        $kullanicisor->execute(array(
         'ad' => $ad,
         'sifre' => $sifre
        ));
        $say=$kullanicisor->rowCount();
        if ($say > 0) {
         $_SESSION['ad']=$ad;
         header('Location:../index.php');
        } else {
         header('Location:../login.php?durum=no');
        }




    }
}


// GİRİŞ KULLANICI KAYDET


if(isset($_POST['kullanicikaydet'])) {
        

    $kaydet=$baglanti->prepare("INSERT INTO kullanici SET
    
    adsoyad=:adsoyad,
    kadi=:kadi,
    yetki=:yetki,
    sifre=:sifre
    ");

    $insert=$kaydet -> execute(array(

        'adsoyad' =>$_POST['adsoyad'],
        'kadi' =>$_POST['kadi'],
        'yetki' =>$_POST['yetki'],
        'sifre' =>$_POST['sifre']
      ));
  

if ($insert) {
    Header("Location:../kullanici.php?durum=okey");
}else {
    Header("Location:../kullanici.php?durum=no");
}

} 

// KULLANICI SİL

//SİL

if (isset($_POST['kullanicisil'])) {

    $sil=$baglanti->prepare("DELETE from kullanici where id=:id");
    
    $sil->execute(array(
        'id'=>$_POST['id']
    ));  
if ($sil) {
    Header("Location:../kullanici.php?durum=ok");
}
else{
    Header("Location:../kullanici.php?durum=no");
}

}










?>