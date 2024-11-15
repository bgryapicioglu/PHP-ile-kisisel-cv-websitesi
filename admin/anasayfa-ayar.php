<?php 

include 'header.php';
include 'conAdmin/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$anasayfasor=$db->prepare("select * from anasayfa where anasayfa_id=?");
$anasayfasor->execute(array(0));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

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
                    <h2>Ana Sayfa<small>


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Logo (850x850) <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" required="required"  name="anasayfa_logo" value="../dimg/<?php echo $anasayfacek['anasayfa_logo']; ?>" class="dropzone">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="anasayfa_baslik" value="<?php echo $anasayfacek['anasayfa_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İsim <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required"  name="anasayfa_isim" value="<?php echo $anasayfacek['anasayfa_isim']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kısa Açıklama <span class="">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required"  name="anasayfa_detay" value="<?php echo $anasayfacek['anasayfa_detay']; ?>"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       

        




                      
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="anasayfa-kaydet" class="btn btn-success">Güncelle</button>
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
