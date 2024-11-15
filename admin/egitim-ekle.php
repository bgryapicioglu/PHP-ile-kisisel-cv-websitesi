<?php 

include 'header.php';
include 'conAdmin/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

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
            <h2>Eğitim Ekle <small>


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

          <form action="conAdmin/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" value="0" name="egitim_baslik" placeholder="" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tarih Aralığı<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" value="0" name="egitim_tarih" placeholder="" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Okul <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" value="0" name="egitim_mekan" placeholder="" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Detay <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" value="0" name="egitim_detay" placeholder="" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
           

         



            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" name="egitimkaydet" class="btn btn-success">Kaydet</button>
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
