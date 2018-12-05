<?php

include '../db/baglan.php';

if ($_POST) {
  // code...

  $kadi = $_POST["kadi"];
    $sifre = $_POST["sifre"];
      $comsur = $_POST["comsur"];
        $secret = $_POST["secret"];

        $stmt = $db->prepare("UPDATE ayarlar SET kadi='$kadi', sifre='$sifre', key1='$comsur', key_secret='$secret' WHERE id=1");
        $bilgi = $stmt->execute();

        if ($bilgi) {
          echo "Güncellendi";
          header("Refresh:1; url=index.php");
        }else{
          echo "hata";
        }



}












 ?>
