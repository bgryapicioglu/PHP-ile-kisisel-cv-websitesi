<?php 

include 'conAdmin/baglan.php';

$anasayfasor=$db->prepare("select * from anasayfa where anasayfa_id=?");
$anasayfasor->execute(array(0));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

ob_start();
session_start();


if (!isset($_SESSION['kullanici_adi'])) {

  header('Location:login.php');

}

  



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="../dimg/<?php echo $anasayfacek['anasayfa_logo']; ?>"  />

  <title>Yönetim Paneli </title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo $anasayfacek['anasayfa_logo']; ?>" class="img-circle profile_img" >
            </div>
            <div class="profile_info">
              <span>Merhaba </span>
              <h2><?php echo $ayarcek['ayar_author']; ?></h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <?php include 'sidebar.php' ?>


          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle" class="st-height-b50 st-height-lg-b30">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="" data-toggle="" aria-expanded="false">
                
                  <span class=" fa fa-angle-down"></span>
                </a>
               
              </li>

            </ul>
          </nav>
        </div>
      </div>
        <!-- /top navigation -->