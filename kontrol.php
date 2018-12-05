<?php
include 'db/baglan.php';
session_start();

if ($_POST) {

  $kadi = $_POST["kadi"];
  $sifre = $_POST["sifre"];

  $cek = $db->query("SELECT * FROM ayarlar WHERE kadi = '$kadi' && sifre = '$sifre' ");
  $count = $cek->rowCount();

  if ($count == 1) {

    $_SESSION["araclar"] = 1;
    echo "Giriş Başarılı";
    header("Refresh:1; url=index.php");
  }else{
    echo "Giriş Başarısız";
    header("Refresh:1; url=login.php");
  }









}












 ?>
