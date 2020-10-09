<?php
try {
    $baglanti = new PDO('mysql:host=localhost;dbname=sporcu', 'root', '');
    
   

} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?> 