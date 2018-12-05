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
  $islem = $_POST["islem"];

  $kullanici = $db->query("SELECT * FROM hesap WHERE kadi = '$kadi' ", PDO::FETCH_ASSOC);
  foreach( $kullanici as $bilgiler ){
    $k_token = $bilgiler["token"];
    $k_token_secret = $bilgiler["token_secret"];
  }
  $cek = $db->query("SELECT * FROM unfollow WHERE kadi = '$kadi'");
  $count = $cek->rowCount();








if ($count == 0) {



  $query = $db->prepare("INSERT INTO unfollow SET
        kadi = :kadi,
        islem = :islem,
        unfollow = :unfollow,
        u_cursor = :u_cursor,
        key1 = :key1,
        key_secret = :key_secret,
        token = :token,
        token_secret = :token_secret
        ");
        $insert = $query->execute(array(
              "kadi" => $kadi,
              "islem" => $islem,
              "unfollow" => '0',
              "u_cursor" => '-1',
              "key1" => $comsur_key,
              "key_secret" => $comsur_secret,
              "token" => $k_token,
              "token_secret" => $k_token_secret
            ));
        if ( $insert ){
            $last_id = $db->lastInsertId();
            echo "Unfolow Eklendi";
            header("Refresh:1; url=index.php");
        }
      }else{
        echo "Bu Kullanıcı Zaten Ekli";
        header("Refresh:1; url=index.php");
      }

}else{
  echo "sg";
}






 ?>
