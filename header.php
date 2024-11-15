<?php 

include 'admin/conAdmin/baglan.php';
include 'admin/conAdmin/fonk.php';



$anasayfasor=$db->prepare("select * from anasayfa where anasayfa_id=?");
$anasayfasor->execute(array(0));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimdasor=$db->prepare("select * from hakkimda where hakkimda_id=?");
$hakkimdasor->execute(array(0));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);





?>




<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="<?php echo $ayarcek[ayar_author]; ?>">
  <meta name="keywords" content="<?php echo $ayarcek[ayar_keywords]; ?>">
  <meta name="description" content="<?php echo $ayarcek[ayar_description]; ?>">





  <!-- Page Title -->
  <title><?php echo $ayarcek['ayar_title']; ?></title>
  <!-- Favicon Icon -->
  <link rel="icon" href="dimg/<?php echo $anasayfacek['anasayfa_logo']; ?>"  />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/lightgallery.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body id="home" class="st-get-sidebar">
  <!-- Start Header Section -->
  <header class="st-site-header st-style2 st-sticky-header">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a href="index.php">
            <div class="st-header-author"><img src="dimg/<?php echo $anasayfacek['anasayfa_logo']; ?>" alt=""></div>
            </a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list st-onepage-nav">
                <li><a href="#anasayfa" class="st-smooth-move">Ana Sayfa</a></li>
                <li><a href="#hakkimda" class="st-smooth-move">Hakkımda</a></li>
                <li><a href="#hizmetler" class="st-smooth-move">HİZMETLERİM</a></li>
                <li><a href="#yetkinlikler" class="st-smooth-move">YETKİNLİKLERİM</a></li>
                <li><a href="#deneyimegitim" class="st-smooth-move">DENEYİM & EĞİTİM</a></li>
                <li><a href="#portfolyo" class="st-smooth-move">Portfoylom</a></li>
                <li><a href="#geridonusler" class="st-smooth-move">Geri Dönüşler</a></li>
                <li><a href="#iletisim" class="st-smooth-move">İLETİŞİM</a></li>
              </ul>
              <div class="st-hero-btn">
                <a href="#banaulas" class="st-btn st-style2 st-color1 st-btn-md st-smooth-move">Bana Ulaş</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->