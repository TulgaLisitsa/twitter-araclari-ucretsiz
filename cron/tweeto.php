<?php

include '../db/baglan.php';
include '../twitter/twitteroauth.php';






        $takipler = $db->query("SELECT * FROM tweet", PDO::FETCH_ASSOC);

            foreach ($takipler as $takip) {
                $cursor = $takip["tweet_cursor"];
                $key1 = $takip["key1"];
                $key_secret = $takip["key_secret"];
                $token = $takip["token"];
                $token_secret = $takip["token_secret"];
                $hes = $takip["hesap"];
                $ids = $takip["id"];
                $atl = $takip["atilan"];

              $twitter = new TwitterOAuth($key1,$key_secret,$token,$token_secret);


                    // code...


                    // code...
                  $islem = $twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$hes.'&count=12&include_rts=false&trim_user=true&exclude_replies=true');
                  $array = json_decode(json_encode($islem), True);


                  if ( $array["errors"][0]["code"] === 326) {
                    echo "bu kullanıcı geçici olarak engellendi";

                   $sonuc = $db->exec("DELETE FROM  tweet where id= $ids  ");
                   
                  }else{

                  $i = 0;
                      $twet = $array[$i]["text"];
                      $twit = $twitter->post('https://api.twitter.com/1.1/statuses/update.json?status='.$twet.'');

                      $error = json_decode(json_encode($twit), True);

                      if (isset($error["errors"])) {

                        $i++;

                          $twet = $array[$i]["text"];
                          $twits = $twitter->post('https://api.twitter.com/1.1/statuses/update.json?status='.$twet.'');
                          $errors = json_decode(json_encode($twits), True);
                        if (isset($errors["errors"])) {

                          $i++;
                            $twet = $array[$i]["text"];
                            $twitt = $twitter->post('https://api.twitter.com/1.1/statuses/update.json?status='.$twet.'');
                            $errort = json_decode(json_encode($twitt), True);
                            if (isset($errort["errors"])) {

                              $i++;
                                $twet = $array[$i]["text"];
                                $twitst = $twitter->post('https://api.twitter.com/1.1/statuses/update.json?status='.$twet.'');
                                $errorts = json_decode(json_encode($twitst), True);
                                if (isset($errorts["errors"])) {

                                  $i++;
                                    $twet = $array[$i]["text"];
                                    $twitsz = $twitter->post('https://api.twitter.com/1.1/statuses/update.json?status='.$twet.'');
                                    $errortz = json_decode(json_encode($twitsz), True);
                                    if (isset($errortz["errors"])) {
                                      echo "Hiç Tweet Atılamadı";
                                    }else {
                                      $son = $atl + 1;
                                      $sstmt = $db->prepare("UPDATE tweet SET atilan=$son WHERE id=$ids");
                                      $bilgsi = $sstmt->execute();
                                      echo $i." Seferde Tweet Atıldı Ve sonlandı<br>";

                                    }

                                }else {
                                  $son = $atl + 1;
                                  $sstmt = $db->prepare("UPDATE tweet SET atilan=$son WHERE id=$ids");
                                  $bilgsi = $sstmt->execute();
                                  echo $i." Seferde Tweet Atıldı Ve sonlandı<br>";
                                
                                }

                            }else {
                              $son = $atl + 1;
                              $sstmt = $db->prepare("UPDATE tweet SET atilan=$son WHERE id=$ids");
                              $bilgsi = $sstmt->execute();
                                echo $i." Seferde Tweet Atıldı Ve sonlandı<br>";

                            }

                        }else {
                          $son = $atl + 1;
                          $sstmt = $db->prepare("UPDATE tweet SET atilan=$son WHERE id=$ids");
                          $bilgsi = $sstmt->execute();
                            echo $i." Seferde Tweet Atıldı Ve sonlandı<br>";

                        }
                      }else{
                          $son = $atl + 1;
                          $sstmt = $db->prepare("UPDATE tweet SET atilan=$son WHERE id=$ids");
                          $bilgsi = $sstmt->execute();
                          echo $i." Seferde Tweet Atıldı Ve sonlandı<br>";

                      }
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
