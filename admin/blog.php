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
        <h2>Blog <small>


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



                  <th class="column-title">Blog Küçük Resim </th>
                  <th class="column-title">Kimden </th>
                  <th class="column-title">Tarih </th>
                  <th class="column-title">Blog Başlık </th>    
                  <th class="column-title">Blog İç Resim</th>
                  <th width="80" class="column-title">Blog Yazı</th>
                  <th width="80" class="column-title"></th>
                  <th width="80" class="column-title"></th>



                </tr>
              </thead>

              <tbody>


                <?php 

                $blogsor=$db->prepare("select * from blog");
                $blogsor->execute(); 
                while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {



                 ?>



                 <tr>

                  <td class=" "><img width="75" height="75" src="<?php echo $blogcek['blog_kucukresim']; ?>"></td>
                  <td class=" "><?php echo $blogcek['blog_kimden']; ?></td>
                  <td class=" "><?php echo $blogcek['blog_date'] ?></td>
                  <td class=" "><?php echo $blogcek['blog_baslik']; ?></td>   
                  <td class=" "><img width="75" height="75" src="<?php echo $blogcek['detay_resim']; ?>"></td> 
                  <td class=" "><?php echo $blogcek['blog_yazi']; ?></td>


                  <td class=" "><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" ></i></button></td>


                  <td class=""><a href="conAdmin/islem.php?blogsil=ok&blog_id=<?php echo $blogcek['blog_id']; ?>"> <button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></td>        

                </tr>

              <?php } ?>

              <div align ="right" class="col-md 12"> <a href="blog-ekle.php"><button  class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button> </div>


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
