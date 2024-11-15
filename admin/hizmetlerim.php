<?php 

include 'header.php';
include 'conAdmin/baglan.php';



?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <h2>Hizmetlerim <small>


          <?php 
          if ($_GET['durum']=='ok') {?>

            <b style="color:green;">İşlem Başarılı</b>


          <?php } else if ($_GET['durum']=='no') {?> 

            <b style="color:red;">İşlem Başarısız</b>

          <?php } ?>
        </small></h2>  


        <div class="x_content">
          <div class="table-responsive"></div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">



                  <th class="column-title">İcon </th>
                  <th class="column-title">Viewbox</th>
                  <th class="column-title">Başlık</th>
                  <th class="column-title">Detay</th>
                  

                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>



                </tr>

              </thead>

              <tbody>


                <?php 

                $hizmetlersor=$db->prepare("select * from hizmetler");
                $hizmetlersor->execute(); 
                while ($hizmetlercek=$hizmetlersor->fetch(PDO::FETCH_ASSOC)) {



                 ?>



                 <tr>

                  <td style="width: 75px;height: 75px" class="st-iconbox-icon">

                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="<?php echo $hizmetlercek['hizmet_viewbox']; ?> ">



                    <path d="<?php echo $hizmetlercek['hizmet_icon']; ?> "/>


                  </svg>

                </td>
                <td class=" "><?php echo $hizmetlercek['hizmet_viewbox']; ?></td>

                <td class=" "><?php echo $hizmetlercek['hizmet_baslik']; ?></td>
                <td class=" "><?php echo $hizmetlercek['hizmet_detay']; ?></td>



                <td class=" "></td>


                <td class=""><a href="conAdmin/islem.php?hizmetlersil=ok&hizmet_id=<?php echo $hizmetlercek['hizmet_id']; ?>"> <button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></td>        

              </tr>

            <?php } ?>

            <div align ="right" class="col-md 12"> <a href="hizmetlerim-ekle.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button> </div>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php' ?>
