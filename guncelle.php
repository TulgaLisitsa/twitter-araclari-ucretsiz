<?php

include 'db/baglan.php';
include 'twitter/twitteroauth.php';



    $twitter = new TwitterOAuth('iAtYJ4HpUVfIUoNnif1DA','172fOpzuZoYzNYaU3mMYvE8m8MEyLbztOdbrUolU',null,null);



    $takipler = $db->query("SELECT * FROM hesap", PDO::FETCH_ASSOC);

        foreach ($takipler as $takip) {
          $ids = $takip["id"];
          $hesap = $takip["kadi"];

          $al = $twitter->get('https://api.twitter.com/1.1/users/show.json?screen_name='.$hesap.'');

          $array = json_decode(json_encode($al), True);
          $takipci = $array["followers_count"];
          $stmt = $db->prepare("UPDATE hesap SET son_takipci=$takipci WHERE id=$ids");
          $bilgsi = $stmt->execute();


}


























 ?>
