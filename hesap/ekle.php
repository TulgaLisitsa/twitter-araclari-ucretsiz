<?php
include '../db/baglan.php';

/*
if( $_POST ){



$query = $db->prepare("INSERT INTO hesap SET
      ad = :ad,
      odul = :odul,
      tarih = :tarih,
      takimlar = :takimlar,
      resim = :resim,
      loc = :loc");
      $insert = $query->execute(array(
            "ad" => $_POST["ad"],
            "odul" => $_POST["odul"],
            "tarih" => $_POST["tarih"],
            "takimlar" => $_POST["takimlar"],
            "resim" => $_POST["resim"],
            "loc" => $_POST["loc"]
      ));
      if ( $insert ){
          $last_id = $db->lastInsertId();
          print "Kayıt Başarrılı";
          header('Location: index.php');
      }

}else {

}


*/


$kadi = $_POST["kadi"];
$sifre = $_POST["sifre"];


include '../twitter/twitteroauth.php';

$ata = new TwitterOAuth('CjulERsDeqhhjSme66ECg','IQWdVyqFxghAtURHGeGiWAsmCAGmdW3WmbEx6Hck');

$h = $ata->getXAuthToken($kadi,$sifre);








if ($_POST) {



if (isset($h['user_id'])) {

  $cek = $db->query("SELECT * FROM hesap WHERE kadi = '$kadi'");
  $count = $cek->rowCount();

if ($count == 0) {


$a = $ata->get('https://api.twitter.com/1.1/users/show.json?screen_name='.$kadi.'');


$token = $h["oauth_token"];
$token_s = $h["oauth_token_secret"];
$id_str = $a->id_str;
$resim = $a->profile_image_url_https;
$takipci = $a->followers_count;


$query = $db->prepare("INSERT INTO hesap SET
      kadi = :kadi,
      resim = :resim,
      token = :token,
      token_secret = :token_secret,
      ilk_takipci = :ilk_takipci,
      son_takipci = :son_takipci,
      user_id = :user_id");
      $insert = $query->execute(array(
            "kadi" => $kadi,
            "resim" => $resim,
            "token" => $token,
            "token_secret" => $token_s,
            "ilk_takipci" => $takipci,
            "son_takipci" => $takipci,
            "user_id" => $id_str
      ));
      if ( $insert ){
          $last_id = $db->lastInsertId();
          echo "Hesap Eklendi";
          header('Location: index.php');
          
      }



}else{
  echo "Bu Kullanıcı Mevcut";
   header('Location: index.php');
    
}

}else{
  echo "kullanıcı adı yada şifre hatalı";
   header('Location: index.php');
  
}

}else{
  echo "SG";
   header('Location: index.php');
  
}










 ?>
