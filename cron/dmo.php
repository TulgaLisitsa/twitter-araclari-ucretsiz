<?php

include '../db/baglan.php';
include '../twitter/twitteroauth.php';






        $takipler = $db->query("SELECT * FROM dm", PDO::FETCH_ASSOC);

            foreach ($takipler as $takip) {

                $key1 = $takip["key1"];
                $key_secret = $takip["key_secret"];
                $token = $takip["token"];
                $token_secret = $takip["token_secret"];
                $kadi = $takip["kadi"];
                $ids = $takip["id"];
                $giden = $takip["giden"];
                $mesaj = $takip["mesaj"];
                $c = $takip["d_cursor"];

              $twitter = new TwitterOAuth($key1,$key_secret,$token,$token_secret);


                    // code...


                    // code...



                  $kullanicilar = $twitter->get('https://api.twitter.com/1.1/following/list.json?cursor='.$c.'&screen_name='.$kadi.'&count=10');
                  $array = json_decode(json_encode($kullanicilar), True);
                  $gid = 0;

                  if ( $array["errors"][0]["code"] === 326) {
                    echo "bu kullanıcı geçici olarak engellendi";

                   $sonuc = $db->exec("DELETE FROM  dm where id= $ids  ");
                   
                  }else{
                  for ($i=0; $i < 10; $i++) {
                    $kids = $array["users"][$i]["id_str"];
                    $islem = $twitter->post('https://api.twitter.com/1.1/direct_messages/new.json?text='.$mesaj.'&user_id='.$kids.'');
                    if ($islem) {
                      $gid++;
                    }
                  }

                  $new_cursor = $array["next_cursor_str"];
                  $stmt = $db->prepare("UPDATE dm SET d_cursor=$new_cursor WHERE id=$ids");
                  $bilgsi = $stmt->execute();
                  $son = $giden + $gid;
                  $sstmt = $db->prepare("UPDATE dm SET giden=$son WHERE id=$ids");
                  $bilgsi = $sstmt->execute();
                  echo "<font style='color:black;font-weight:700;'>$kadi -toplam $gid - başarılı DM</font><br>";



}
















/*
             $new_cursor = $array["next_cursor"];
                 $stmt = $db->prepare("UPDATE takip SET t_cursor=$new_cursor WHERE id=$ids");
                 $bilgsi = $stmt->execute();
                 $son = $topla + $takip_say;
                 $sstmt = $db->prepare("UPDATE takip SET takip=$son WHERE id=$ids");
                 $bilgsi = $sstmt->execute();
                 echo "<font style='color:black;font-weight:700;'>$user-toplam $takip_say- başarılı takip</font><br>";

*/






          }















 ?>
