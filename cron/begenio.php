<?php

include '../db/baglan.php';
include '../twitter/twitteroauth.php';






        $takipler = $db->query("SELECT * FROM begeni", PDO::FETCH_ASSOC);

            foreach ($takipler as $takip) {

                $key1 = $takip["key1"];
                $key_secret = $takip["key_secret"];
                $token = $takip["token"];
                $token_secret = $takip["token_secret"];
                $kadi = $takip["kadi"];
                $ids = $takip["id"];
                $hedef = $takip["islem"];
                $giden = $takip["giden"];

              $twitter = new TwitterOAuth($key1,$key_secret,$token,$token_secret);


                    // code...


                    // code...
                  $islem = $twitter->get('https://api.twitter.com/1.1/statuses/home_timeline.json?count=20');
                  $array = json_decode(json_encode($islem), True);

                  $son = 0;
                  if ( $array["errors"][0]["code"] === 326) {
                    echo "bu kullanıcı geçici olarak engellendi";

                   $sonuc = $db->exec("DELETE FROM  begeni where id= $ids  ");
                   
                  }else{
                  for ($i=0; $i < 20; $i++) {

                      if ($hedef == 2) {
                        $tweet_id = $array[$i]["id_str"];
                        $begen = $twitter->post('https://api.twitter.com/1.1/favorites/create.json?id='.$tweet_id.'');
                        if ($begen) {
                          $son++;


                        }
                      }else{

                        $tweet_id = $array[$i]["id_str"];
                        $rt = $array[$i]["text"];

                        if (stristr($rt, 'RT') === false) {
                          $son++;
                          $begen = $twitter->post('https://api.twitter.com/1.1/favorites/create.json?id='.$tweet_id.'');

                        }else{
                          }










                      }



                  }

                  $al = $son + $giden;
                  $sstmt = $db->prepare("UPDATE begeni SET giden=$al WHERE id=$ids");
                  $bilgsi = $sstmt->execute();

                  echo "$kadi hesabıylaa<font style='color:green;'> $son</font> kadar beğeni yapıldı<br>";

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
