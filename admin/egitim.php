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
        <h2>Eğitim <small>


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



                  <th class="column-title">Başlık </th>
                  <th class="column-title">Tarih</th>
                  <th class="column-title">Kurum</th>
                  <th class="column-title">Detay</th>
                  


                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>



                </tr>

              </thead>

              <tbody>


                <?php 

                $egitimsor=$db->prepare("select * from egitim");
                $egitimsor->execute(); 
                while ($egitimcek=$egitimsor->fetch(PDO::FETCH_ASSOC)) {



                 ?>



                 <tr>

                  
                <td class=" "><?php echo $egitimcek['egitim_baslik']; ?></td>
                <td class=" "><?php echo $egitimcek['egitim_tarih']; ?></td>
                <td class=" "><?php echo $egitimcek['egitim_mekan']; ?></td>
                <td class=" "><?php echo $egitimcek['egitim_detay']; ?></td>



                <td class=" "></td>


                <td class=""><a href="conAdmin/islem.php?egitimsil=ok&egitim_id=<?php echo $egitimcek['egitim_id']; ?>"> <button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></td>        

              </tr>

            <?php } ?>

            <div align ="right" class="col-md 12"> <a href="egitim-ekle.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button> </div>


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
