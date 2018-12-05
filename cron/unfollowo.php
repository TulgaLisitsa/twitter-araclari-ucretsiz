<?php

include '../db/baglan.php';
include '../twitter/twitteroauth.php';




        $takipler = $db->query("SELECT * FROM unfollow", PDO::FETCH_ASSOC);

            foreach ($takipler as $takip) {
              $kadi = $takip["kadi"];
              $ids = $takip["id"];
              $yap = $takip["islem"];
              $topla = $takip["unfollow"];
              $cursor = $takip["u_cursor"];
              $key1 = $takip["key1"];
              $key_secret = $takip["key_secret"];
              $token = $takip["token"];
              $token_secret = $takip["token_secret"];

                  $twitter = new TwitterOAuth($key1,$key_secret,$token,$token_secret);


                    // code...

                    $takip_say = 0;
                    // code...
                    $islem = $twitter->get('https://api.twitter.com/1.1/friends/list.json?cursor='.$cursor.'&screen_name='.$kadi.'&count=20');
                    $array = json_decode(json_encode($islem), True);
if ( $array["errors"][0]["code"] === 326) {
                    echo "bu kullanıcı geçici olarak engellendi";

                   $sonuc = $db->exec("DELETE FROM  unfollow where id= $ids  ");
                   
                  }else{
                    for ($i=0; $i < 20; $i++) {
                      // code...


                  $kullanici = $array["users"][$i]["screen_name"];
                  $s_takip = $twitter->get('https://api.twitter.com/1.1/friendships/show.json?source_screen_name='.$kullanici.'&target_screen_name='.$kadi.'');
                  $at = json_decode(json_encode($s_takip), True);
                  $sorgu = @$at["relationship"]["target"]["followed_by"];
                  
if ($yap == '2') {
  $islen = $twitter->post('https://api.twitter.com/1.1/friendships/destroy.json?screen_name='.$kullanici.'');

  if ($islen) {

    $takip_say++;
  }else {
    echo "hata";
  }
}else{
                  if ($sorgu == '1') {

                  }else{
                    $islen = $twitter->post('https://api.twitter.com/1.1/friendships/destroy.json?screen_name='.$kullanici.'');
                    if ($islen) {

                      $takip_say++;
                    }else {
                      echo "hata";
                    }
                  }

}



}

                  $new_cursor = $array["next_cursor_str"];
                  $stmt = $db->prepare("UPDATE unfollow SET u_cursor=$new_cursor WHERE id=$ids");
                  $bilgsi = $stmt->execute();
                  $son = $topla + $takip_say;
                  $sstmt = $db->prepare("UPDATE unfollow SET unfollow=$son WHERE id=$ids");
                  $bilgsi = $sstmt->execute();
                  echo "<font style='color:black;font-weight:700;'>$kadi-toplam $takip_say- başarılı Unfollow</font><br>";

}








          }















 ?>
