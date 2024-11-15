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
        <h2>Portfolyo <small>


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



                  <th class="column-title">Portfolyo Resim </th>
                  <th class="column-title">Portfolyo Açıklama </th>
                  <th class="column-title">Portfolyo İsim </th>  
                  <th class="column-title"></th>
                    
                  <th class="column-title"></th>
                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>



                </tr>
              </thead>

              <tbody>


                <?php 

                $portfolyosor=$db->prepare("select * from portfolyo order by portfolyo_id DESC limit 25");
                $portfolyosor->execute(); 
                while ($portfolyocek=$portfolyosor->fetch(PDO::FETCH_ASSOC)) {



                 ?>



                 <tr>

                  <td class=" "><img width="150" height="150" src="<?php echo $portfolyocek['portfolyo_resimyol']; ?>"></td>
                  <td class=" "><?php echo $portfolyocek['portfolyo_aciklama']; ?></td>
                  <td class=" "><?php echo $portfolyocek['portfolyo_ad']; ?></td>  
                  <td class=" "></td>
                   
                  <td class=" "></td>


                  <td class=" "></td>


                  <td class=""><a href="conAdmin/islem.php?portfolyosil=ok&portfolyo_id=<?php echo $portfolyocek['portfolyo_id']; ?>"> <button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></td>        

                </tr>

              <?php } ?>

              <div align ="right" class="col-md 12"> <a href="portfolyo-ekle.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button> </div>


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
