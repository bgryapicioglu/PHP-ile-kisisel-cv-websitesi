<?php 


include 'conAdmin/baglan.php';

$anasayfasor=$db->prepare("select * from anasayfa where anasayfa_id=?");
$anasayfasor->execute(array(0));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

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
  <title><?php echo $ayarcek['ayar_title']; ?></title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
 

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">


          <form action="conAdmin/islem.php" method="POST">
            <h1>Giriş Form</h1>
            <div>
              <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullanici_adi" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Şifre" name="kullanici_sifre" /> 
            </div>
            <div>
              <button type="submit" class="btn btn-primary" name="girisyapbtn" >Giriş Yap</button>

            </div>

            <div class="clearfix"></div>

            <div class="separator">





              <div>
                <h1><i class="fa fa-lock"></i> <?php echo $ayarcek['ayar_title']; ?></h1>
                <p>Copyright 2024. All Rights Reserved | <?php echo $ayarcek['ayar_author']; ?></p>
              </div>
            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
</body>
</html>
