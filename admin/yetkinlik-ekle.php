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
        <h2>Yetkinlik Detay<small>


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



                  <th class="column-title">Yetkinlik İsim </th>
                  <th class="column-title">Yetkinlik Yüzde </th>
                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>



                </tr>
              </thead>

              <tbody>


                <?php 

                $yetdetaysor=$db->prepare("select * from yetdetay");
                $yetdetaysor->execute(); 
                while ($yetdetaycek=$yetdetaysor->fetch(PDO::FETCH_ASSOC)) {



                 ?>



                 <tr>

                  <td class=" "><?php echo $yetdetaycek['yetenek_isim']; ?></td>
                  <td class=" "><?php echo $yetdetaycek['yetenek_yuzde']; ?></td>


                  <td class=" "></i></button></td>


                  <td class=""><a href="conAdmin/islem.php?yeteneksil=ok&yetdetay_id=<?php echo $yetdetaycek['yetdetay_id']; ?>"> <button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></td>        

                </tr>

              <?php } ?>

              <div align ="right" class="col-md 12"> <a href="yetdetaykaydet.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button> </div>


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
