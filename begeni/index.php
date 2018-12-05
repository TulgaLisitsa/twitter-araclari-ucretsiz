<?php
session_start();
ob_start();

if (isset($_SESSION["araclar"])) { ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Beğeni | vasdej.com</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<style media="screen">

.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:5px}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#868e96}.blockquote-footer::before{content:"\2014 \00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #ddd;border-radius:.25rem;transition:all .2s ease-in-out;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#868e96}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}code{padding:.2rem .4rem;font-size:90%;color:#bd4147;background-color:#f8f9fa;border-radius:.25rem}a>code{padding:0;color:inherit;background-color:inherit}kbd{padding:.2rem .4rem;font-size:90%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;margin-top:0;margin-bottom:1rem;font-size:90%;color:#212529}pre code{padding:0;font-size:inherit;color:inherit;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px;width:100%}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}
.container-fluid{width:100%;margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px;width:100%}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,
.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}
/* See also: https://codepen.io/raubarrera/pen/VejpQP */




.custom-select {
  display: inline-block;
  background: rgba(0,0,0,.3);
  border: 1px solid #fff;
  color: #fff;
  font-size: 12px;
  position: relative;
  padding: 0px;
  width: 100%;
  text-align: center;
}

.custom-select:after {
  display: block;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  text-align: center;
  line-height: 5em;
  width: 100%;
}

.custom-select select {
  border: 0;
  color: #fff;
  text-align: center;
  background: transparent;
  padding: 9px;
  width: 100%;
  letter-spacing: 1px;
  font-family: 'Roboto', sans-serif;
  font-size: 1.4em;
  line-height: 1.2em;
  cursor: pointer;
  transition: .2s all;
  border-radius: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
}

.custom select select::-ms-expand {
  display: none;
  text-align: center;
}

.custom-select select:hover,
.custom-select select:focus {
  outline: 0;
  background: #000;
  text-align: center;
  background: rgba(0,0,0,.5);
}

option {
  color: #000;
  display: block;
  background: #fff;
  text-align: center;
  line-height: 3.9em;
  padding: 10px;
}
</style>

    <!-- Bootstrap core CSS     -->
    <link href="../admin/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../admin/assets/css/ic.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../admin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../admin/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../admin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    TWİTTER ARAÇLARI
                </a>
            </div>

            <ul class="nav">
              <li class="">
                  <a href="../index.php">
                      <i class="pe-7s-home"></i>
                      <p>ANASAYFA</p>
                  </a>
              </li>
              <li class="">
                  <a href="../hesap/">
                      <i class="pe-7s-user"></i>
                      <p>HESAP İŞLEMLERİ</p>
                  </a>
              </li>
              <li class="">
                  <a href="../takip/">
                      <i class="pe-7s-play"></i>
                      <p>OTO TAKİP</p>
                  </a>
              </li>
              <li class="">
                  <a href="../unfollow/">
                      <i class="pe-7s-delete-user"></i>
                      <p>OTO UNFOLLOW</p>
                  </a>
              </li>
							<li class="">
									<a href="../tweet">
											<i class="pe-7s-drop"></i>
											<p>OTO TWEET</p>
									</a>
							</li>
              <li class="">
                  <a href="../dm/">
                      <i class="pe-7s-paper-plane"></i>
                      <p>OTO DM</p>
                  </a>
              </li>
              <li class="active">
                  <a href="index.php">
                      <i class="pe-7s-like2"></i>
                      <p>OTO BEĞENİ</p>
                  </a>
              </li>
              <li class="">
                  <a href="../ayarlar/">
                      <i class="pe-7s-settings"></i>
                      <p>AYARLAR</p>
                  </a>
              </li>
							<li class="">
									<a href="../cikis/">
											<i class="pe-7s-delete-user"></i>
											<p>ÇIKIŞ YAP</p>
									</a>
							</li>

				<li style="margin-bottom:-20px;" class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>SATIN AL</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div style="float:right;" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                        <li  class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <b class="caret hidden-lg hidden-md"></b>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">BİLDİRİM</a></li>
                              </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">



              <div class="row">
                <!--
                <div class="col-md-12">
                  <div class="alert alert-succ">

                                    <span><b> Hata - </b> Kullanıcı Adı Yada Şifreniz Hatalı.</span>
                                </div>
                </div>
              -->




              <div class="col-md-4">
                  <form action="ekle.php"method="POST">
                  <div class="form-group">
                    <!-- See also: https://codepen.io/raubarrera/pen/VejpQP -->
            <div class="center-element">
            <span class="custom-select">
            <select name="islem" >


            <option value="1">Filtreli Beğeni</option>
            <option value="2">Filtresiz Beğeni</option>


            </select>
            </span>
            </div>
                  </div>
              </div>
                                          <div class="col-md-4">

                                              <div class="form-group">
                                                <!-- See also: https://codepen.io/raubarrera/pen/VejpQP -->
<div class="center-element">
  <span class="custom-select">
    <select name="user" >

<?php

include '../db/baglan.php';
$querys = $db->query("SELECT * FROM hesap", PDO::FETCH_ASSOC);

       foreach( $querys as $ro ){





 ?>
      <option value="<?php echo $ro["kadi"]; ?>"><?php echo $ro["kadi"]; ?></option>

    <?php } ?>
    </select>
  </span>
</div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">

                                                <input value="Ekle"style="font-size:12px;" type="submit" class="col-md-12 btn btn-success btn-fill pull-right">
                                              </div>
                                                </form>
                                          </div>

                                      </div>

                          <div class="row" >
                            <div class="col-md-12">
                                                    <div class="card">
                                                        <center>  <div class="header">
                                                          <h4 class="title">Beğeni LOG</h4>

                                                        </div></center>
                                                        <div class="content table-responsive table-full-width">
                                                            <table class="table table-hover table-striped">
                                                                <thead>
                                                                    <tr>
                                                                      <th>İD</th>
                                                                	<th>Kullanıcı</th>
                                                                  <th>Filtre</th>
                                                                    <th>giden</th>
                                                                      <th>İşlem</th>
                                                                </tr>
                                                              </thead>
                                                                <tbody>
                                                                <?php

                              $query = $db->query("SELECT * FROM begeni", PDO::FETCH_ASSOC);

                                foreach( $query as $row ){
                                  $hesap = $row["kadi"];
                                  $ka = $db->query("SELECT * FROM hesap WHERE kadi='$hesap'", PDO::FETCH_ASSOC);

                                  foreach ($ka as $ke) {



                                                                 ?>
                                                                 <tr>
                                                                   <td><?php echo $ke["id"]; ?></td>
                                                <td><img style="border-radius:20px;margin-right:10px;" src="<?php echo $ke["resim"]; ?>"><?php echo $row["kadi"]; ?></td>

                                                                   <td><?php
                                                                   $sss = $row["islem"];
                                                                   if ($sss == 1) {
                                                                     echo "Filtreli Beğeni";
                                                                   }else {
                                                                     echo "Filtresiz Beğeni";
                                                                   }




                                                                    ?></td>
                                                                   <td><?php echo $row["giden"]; ?></td>
                                                               <td>
                                                               <form class="" action="sil.php" method="post">
                                                               <input style="font-size:12px;"name="id"value="<?php echo $row["id"]; ?>" type="hidden" class="col-md-12 btn btn-success btn-fill pull-right">
                                                               <input value="sil"style="font-size:12px;" type="submit" class="col-md-12 btn btn-danger btn-fill pull-right">

                                                               </form>

                                                                     </td>
                                                                 </tr>
                                                                 <?php   }

                                                                 } ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                          </div>



            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../admin/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../admin/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../admin/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../admin/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../admin/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../admin/assets/js/demo.js"></script>


</html>

	<?php

}else{
header("Refresh:1; url=../login.php");
}


 ?>
