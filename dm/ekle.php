<?php
include '../db/baglan.php';
/*



*/
$tokenler = $db->query("SELECT * FROM ayarlar WHERE id=1 ", PDO::FETCH_ASSOC);
foreach( $tokenler as $token_al ){
  $comsur_key = $token_al["key1"];
  $comsur_secret = $token_al["key_secret"];
}

if ($_POST) {

  $kadi = $_POST["user"];
  $mesaj = $_POST["mesaj"];
  $str = strlen($mesaj);
  $kullanici = $db->query("SELECT * FROM hesap WHERE kadi = '$kadi' ", PDO::FETCH_ASSOC);
  foreach( $kullanici as $bilgiler ){
    $k_token = $bilgiler["token"];
    $k_token_secret = $bilgiler["token_secret"];
  }
  $cek = $db->query("SELECT * FROM dm WHERE kadi = '$kadi'");
  $count = $cek->rowCount();








if ($count == 0) {


if (empty($mesaj)) {
  echo "Mesaj Giriniz";
  header("Refresh:1; url=index.php");
}else{
  if ($str < 240) {
    $query = $db->prepare("INSERT INTO dm SET
          kadi = :kadi,
          mesaj = :mesaj,
          giden = :giden,
          d_cursor = :cursor,
          key1 = :key1,
          key_secret = :key_secret,
          token = :token,
          token_secret = :token_secret
          ");
          $insert = $query->execute(array(
                "kadi" => $kadi,
                "mesaj" => $mesaj,
                "giden" => '0',
                "cursor" => '-1',
                "key1" => $comsur_key,
                "key_secret" => $comsur_secret,
                "token" => $k_token,
                "token_secret" => $k_token_secret
                ));
          if ( $insert ){
              $last_id = $db->lastInsertId();
              echo "Dm Eklendi";
              header("Refresh:1; url=index.php");
          }
  }else{
    echo "Mesajınız Çok Uzun";
  }


}
      }else{
        echo "Bu Kullanıcı Zaten Ekli";
        header("Refresh:1; url=index.php");
      }

}else{
  echo "sg";
}






 ?>
