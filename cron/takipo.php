<?php



include '../db/baglan.php';
include '../twitter/twitteroauth.php';






        $takipler = $db->query("SELECT * FROM takip", PDO::FETCH_ASSOC);

            foreach ($takipler as $takip) {
              $user = $takip["hesap"];
              $ids = $takip["id"];
              $yap = $takip["islem"];
              $topla = $takip["takip"];
              $takip_edilecek = $takip["kadi"];
              $cursor = $takip["t_cursor"];
              $key1 = $takip["key1"];
              $key_secret = $takip["key_secret"];
              $token = $takip["token"];
              $token_secret = $takip["token_secret"];


                  $twitter = new TwitterOAuth($key1,$key_secret,$token,$token_secret);


                    // code...


                    // code...
                    if ($yap == '2') {


                  $islem = $twitter->get('https://api.twitter.com/1.1/followers/list.json?cursor='.$cursor.'&screen_name='.$takip_edilecek.'&count=21');
}else{
          $islem = $twitter->get('https://api.twitter.com/1.1/friends/list.json?cursor='.$cursor.'&screen_name='.$takip_edilecek.'&count=41');

}
                  $array = json_decode(json_encode($islem), True);
                  $takip_say = 0;
                  
                  if ( $array["errors"][0]["code"] === 326) {
                    echo "bu kullanıcı geçici olarak engellendi";

                   $sonuc = $db->exec("DELETE FROM  takip where id= $ids  ");
                   
                  }else{
              for ($i=0; $i < 40; $i++) {
                  if (isset($array["errors"][0]["code"])) {
                    echo "Limiti Aştık";
                  }else{

                      // code...

                    $kullanicilar = $array["users"][$i]["screen_name"];
                    $resim = $array["users"][$i]["default_profile_image"];
                    $bio = $array["users"][$i]["description"];
                    $ulke = $array["users"][$i]["lang"];

                    $s_takip = $twitter->get('https://api.twitter.com/1.1/friendships/show.json?source_screen_name='.$user.'&target_screen_name='.$kullanicilar.'');

                    $s_f = json_decode(json_encode($s_takip), True);
                    $beni_takip =  @$s_f["relationship"]["target"]["followed_by"];
                    if ($bio == '') {


                    }else{

                      if ($beni_takip == '') {



                          if ($resim == '1') {


                          }else{
                            if ($ulke == 'tr') {
                              $tak = $twitter->post('https://api.twitter.com/1.1/friendships/create.json?screen_name='.$kullanicilar.'&follow=true');
                             
                              
                              if ($tak) {

                                $takip_say++;
                              }else{

                              }
                            }else{

                            }


                          }
                      }else{


                      }

                    }


}
                 }
}
                 $new_cursor = $array["next_cursor_str"];
                 $stmt = $db->prepare("UPDATE takip SET t_cursor=$new_cursor WHERE id=$ids");
                 $bilgsi = $stmt->execute();
                 $son = $topla + $takip_say;
                 $sstmt = $db->prepare("UPDATE takip SET takip=$son WHERE id=$ids");
                 $bilgsi = $sstmt->execute();
                 echo "<font style='color:black;font-weight:700;'>$user-toplam $takip_say- başarılı takip</font><br>";








          }















 ?>



