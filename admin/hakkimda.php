<?php 

include 'header.php';
include 'conAdmin/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$anasayfasor=$db->prepare("select * from anasayfa where anasayfa_id=?");
$anasayfasor->execute(array(0));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

$hakkimdasor=$db->prepare("select * from hakkimda where hakkimda_id=?");
$hakkimdasor->execute(array(0));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Hakkımda<small>
              

              <?php 
              if ($_GET['durum']=='ok') {?>

                <b style="color:green;">Güncelleme Başarılı</b>


              <?php } else if ($_GET['durum']=='no') {?> 

                <b style="color:red;">Güncelleme Başarısız</b>

              <?php } ?>
            </small></h2>
            <ul class="nav navbar-right panel_toolbox">




            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form action="conAdmin/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">




            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fotoğraf (570x514) <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="first-name"  name="hakkimda_fotograf" required="" value="<?php echo $hakkimdacek['hakkimda_fotograf']; ?>" class="dropzone">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CV Dosyası <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" id="first-name"  name="hakkimda_cvindir" required="" value="<?php echo $hakkimdacek['hakkimda_cvindir']; ?>" class="dropzone">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="hakkimda_baslik" required="required" value="<?php echo $hakkimdacek['hakkimda_baslik']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Meslek <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="hakkimda_meslek" required="required" value="<?php echo $hakkimdacek['hakkimda_meslek']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Açıklama <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="hakkimda_aciklama" required="required" value="<?php echo $hakkimdacek['hakkimda_aciklama']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Doğum Tarihi <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="hakkimda_dt" required="required" value="<?php echo $hakkimdacek['hakkimda_dt']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dil <span class="">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  name="hakkimda_diller" required="required" value="<?php echo $hakkimdacek['hakkimda_diller']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            





            

            



            









            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" name="hakkimdakaydet" class="btn btn-success">Güncelle</button>
            </div>





          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php' ?>
