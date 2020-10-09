

<?php    

require 'baglanti.php';



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
    

    // Foto İçin
    
    if(isset($_POST['sliderkaydet'])) {
        

    $uploads_dir = '../resimler';
    @$tmp_name = $_FILES['foto'] ["tmp_name"];
    @$name = $_FILES['foto'] ["name"];

    $sayi1=rand(20000,30000);
    $sayi2=rand(20000,30000);
    $sayi3=rand(20000,30000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimyolu=$sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    

    



    $kaydet=$baglanti->prepare("INSERT INTO slider1 SET
    
    kucuk_baslik=:kucuk_baslik,
    baslik1=:baslik1,
    baslik2=:baslik2,
    baslik3=:baslik3,
    link=:link,
    buton=:buton,
    sira=:sira,
    foto=:foto");



    $insert=$kaydet -> execute(array(

        'kucuk_baslik' =>$_POST['kucuk_baslik'],
        'baslik1' =>$_POST['baslik1'],
        'baslik2' =>$_POST['baslik2'],
        'baslik3' =>$_POST['baslik3'],
        'link' =>$_POST['link'],
        'buton' =>$_POST['buton'],
        'sira' =>$_POST['sira'],
        'foto' =>$resimyolu
        
       
    ));
  

if ($insert) {
    Header("Location:../slider.php?durum=ok");
}else {
    Header("Location:../slider.php?durum=no");
}

} 



?>