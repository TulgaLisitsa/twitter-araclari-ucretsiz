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
  $user = $_POST["user"];
  $kadi = $_POST["kadi"];
  $islem = $_POST["islem"];

  $kullanici = $db->query("SELECT * FROM hesap WHERE kadi = '$user' ", PDO::FETCH_ASSOC);
  foreach( $kullanici as $bilgiler ){
    $k_token = $bilgiler["token"];
    $k_token_secret = $bilgiler["token_secret"];
  }
  $cek = $db->query("SELECT * FROM takip WHERE hesap = '$user'");
  $count = $cek->rowCount();


if (empty($kadi)) {
  echo "Kullanıcı Giriniz";
  header("Refresh:1; url=index.php");
}else{





if ($count == 0) {



  $query = $db->prepare("INSERT INTO takip SET
        kadi = :kadi,
        hesap = :hesap,
        islem = :islem,
        takip = :takip,
        t_cursor = :t_cursor,
        key1 = :key1,
        key_secret = :key_secret,
        token = :token,
        token_secret = :token_secret
        ");
        $insert = $query->execute(array(
              "kadi" => $kadi,
              "hesap" => $user,
              "islem" => $islem,
              "takip" => '0',
              "t_cursor" => '-1',
              "key1" => $comsur_key,
              "key_secret" => $comsur_secret,
              "token" => $k_token,
              "token_secret" => $k_token_secret
            ));
        if ( $insert ){
            $last_id = $db->lastInsertId();
            echo "Takip Eklendi";
            header("Refresh:1; url=index.php");
        }
      }else{
        echo "Bu Kullanıcı Zaten Ekli";
        header("Refresh:1; url=index.php");
      }
}
}else{
  echo "sg";
}






 ?>
