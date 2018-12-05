<?php


// VeriBağlantısı Bilgileri
$info = array(
  'host' => 'localhost',
  'username' => 'baybarsb_vasdej',
  'password' => 'buradaşifrevar',
  'database' => 'baybarsb_vasdej'
);

// Veri Bağlantısı




try{
  $db = new PDO('mysql:host='.
  $info['host'].';dbname='.
  $info['database'].';charset=utf8',
  $info['username'],
  $info['password']);
}catch( PDOException $e ){
  print $e->getMessage();
}















 ?>
