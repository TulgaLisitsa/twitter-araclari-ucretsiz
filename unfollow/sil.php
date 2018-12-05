<?php
include '../db/baglan.php';
if ($_POST) {
  $id = $_POST["id"];
  $sonuc = $db->exec("DELETE FROM  unfollow where id= $id  ");
  if ($sonuc) {
  echo "silindi";
  header('Location: index.php');
}else{
  echo "Başarısız";
}
}

 ?>
