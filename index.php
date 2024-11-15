<?php

include 'header.php';
include '/conAdmin/baglan.php';
include '/conAdmin/fonk.php';

$yeteneksor=$db->prepare("select * from yetenek where yetenek_id=?");
$yeteneksor->execute(array(0));
$yetenekcek=$yeteneksor->fetch(PDO::FETCH_ASSOC);

?>



<!-- Start Hero Seciton -->
<section id="anasayfa" class="st-hero st-style2">
  <div class="container">
    <div class="st-hero-text">
      <h1><?php echo $anasayfacek['anasayfa_baslik']; ?><span> <?php echo $anasayfacek['anasayfa_isim']; ?></span></h1>
      <p><?php  echo $anasayfacek['anasayfa_detay']; ?>.</p>
      <div class="st-hero-social-links">



        <a href="<?php echo $ayarcek['ayar_facebook']; ?>" target="_blank" class="st-social-btn">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="<?php echo $ayarcek['ayar_x']; ?>" target="_blank" class="st-social-btn">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="<?php echo $ayarcek['ayar_google']; ?>" target="_blank" class="st-social-btn">
          <i class="fab fa-linkedin"></i>
        </a>

      </div>


    </div>
  </div>
  <div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
  </div>
  <div id="particles-js"></div>
</section>
<!-- End Hero Seciton -->

<!-- Start About Seciton -->
<section id="hakkimda" class="st-about-wrap">
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h4 class="st-section-heading-title">HAKKIMDA</h4>
      <h2 class="st-section-heading-subtitle">HAKKIMDA</h2>
    </div>
    <div class="st-height-b25 st-height-lg-b25"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInLeft">
        <div class="st-about-img-wrap">
          <div  class="st-about-img st-dynamic-bg st-bg" data-src="dimg/<?php echo $hakkimdacek['hakkimda_fotograf']; ?>"></div>
        </div>
        <div class="st-height-b0 st-height-lg-b30"></div>
      </div>
      <div class="col-lg-6">
        <div class="st-vertical-middle">
          <div class="st-vertical-middle-in">
            <div class="st-text-block st-style1">
              <h2 class="st-text-block-title"><?php echo $hakkimdacek['hakkimda_baslik']; ?></h2>
              <h4 class="st-text-block-subtitle"><?php echo $hakkimdacek['hakkimda_meslek']; ?></h4>
              <div class="st-text-block-text">
                <p><?php echo $hakkimdacek['hakkimda_aciklama']; ?></p>
              </div>
              <ul class="st-text-block-details st-mp0">
                <li><span>Doğum Tarihi</span> : <span><?php echo $hakkimdacek['hakkimda_dt']; ?></span></li>
                <li><span>Telefon</span> : <span><?php echo $ayarcek['ayar_tel']; ?></span></li>
                <li><span>E-Mail</span> : <span><?php echo $ayarcek['ayar_mail'] ?></span></li>
                <li><span>İl</span> : <span><?php echo $ayarcek['ayar_il'] ?></span></li>
                <li><span>Dil</span> : <span><?php echo $hakkimdacek['hakkimda_diller']; ?></span></li>
                
              </ul>
              <div class="st-text-block-btn">



                <a id="first-name" target="_blank" href="dimg/<?php echo $hakkimdacek['hakkimda_cvindir']; ?>" download class="st-btn st-style1 st-color1">CV İndir</a> 
                <div class="st-height-b50 st-height-lg-b30"></div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Seciton -->

<!-- Start Service Seciton -->
<section id = "hizmetler" class="st-dark-bg">
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container" >
    <div class="st-section-heading st-style1">
      <h4 class="st-section-heading-title">HİZMETLERİM</h4>
      <h2 class="st-section-heading-subtitle">HİZMETLERİM</h2>
    </div>
    <div class="st-height-b25 st-height-lg-b25"></div>
  </div>



  <!-- Iconbox Container -->

  <div class="container">
    <div class="row">



     <?php 

     $hizmetsor=$db->prepare("select * from hizmetler");
     $hizmetsor->execute(); 
     while ($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC)) {



       ?>


       <!-- .col -->
       <div class="col-lg-4 col-md-6">
        <div class="st-iconbox st-style1">
          <div class="st-iconbox-icon">


           <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="<?php echo $hizmetcek['hizmet_viewbox']; ?>">
            <path d="<?php echo $hizmetcek['hizmet_icon']; ?>"/>
            </svg>




          </div>
          <h2 class="st-iconbox-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h2>
          <div class="st-iconbox-text"><?php echo $hizmetcek['hizmet_detay']; ?></div>
        </div>
        <div class="st-height-b50 st-height-lg-b30"></div>
      </div>
      <!-- .col -->


    <?php } ?>
































  </section>



  <!-- End Service Seciton -->









  <!-- Start Skill Seciton -->
  <section id="yetkinlikler" class="">
    <div class="st-height-b50 st-height-lg-b30"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">YETKİNLİKLERİM</h4>
        <h2 class="st-section-heading-subtitle">YETKİNLİKLERİM</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="st-skill-wrap">
            <div class="st-skill-heading">
              <h2 class="st-skill-title"><?php echo $yetenekcek['yetenek_baslik']; ?></h2>
              <div class="st-skill-subtitle"><?php echo $yetenekcek['yetenek_detay1']; ?><br>
                <br><?php echo $yetenekcek['yetenek_detay2']; ?>
              </div>
              <div class="st-height-b50 st-height-lg-b30"></div>
            </div><!-- .st-skill-heading -->
          </div>
        </div>



        <!-- Progressbar -->

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b30"></div>
          <div class="st-progressbar-wrap">

            <!-- .st-single-progressbar -->


            <?php 

            $yetdetaysor=$db->prepare("select * from yetdetay");
            $yetdetaysor->execute(); 
            while ($yetdetaycek=$yetdetaysor->fetch(PDO::FETCH_ASSOC)) {



             ?>



             <div class="st-single-progressbar">
              <div class="st-progressbar-heading">
                <h3 class="st-progressbar-title"><?php echo $yetdetaycek['yetenek_isim']; ?></h3>
                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                data-wow-delay="0.5s"><?php   echo $yetdetaycek['yetenek_yuzde']; ?></div>
              </div>
              <div class="st-progressbar" data-progress="<?php   echo $yetdetaycek['yetenek_yuzde']; ?>">
                <div class="st-progressbar-in wow fadeInLeft"></div>
              </div>
            </div>
            <div class="st-height-b30 st-height-lg-b20"></div>



          </div><!-- .st-single-progressbar -->
        <?php } ?>

      </div>
    </div>
  </div>
</div>
</section>
<!-- End Skill Seciton -->






<!-- Start Resume Seciton -->
<section id="deneyimegitim" class="st-dark-bg">
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h4 class="st-section-heading-title">DENEYİM & EĞİTİM</h4>
      <h2 class="st-section-heading-subtitle">DENEYİM & EĞİTİM</h2>
    </div>
    <div class="st-height-b25 st-height-lg-b25"></div>
  </div>
  <div class="container">
    <div class="row">
      <!-- Experience -->
      <div class="col-lg-6">
        <div class="st-resume-wrap">
          <div class="st-resume-heading">
            <img src="assets/img/icon/resume-icon1.png" alt="resume-icon">
            <h2 class="st-resume-heading-title">Deneyim</h2>
          </div>
          <div class="st-height-b50 st-height-lg-b30"></div>


          <?php 

          $deneyimsor=$db->prepare("select * from deneyim");
          $deneyimsor->execute(); 
          while ($deneyimcek=$deneyimsor->fetch(PDO::FETCH_ASSOC)) {



           ?>


           <!-- st-resume-timeline -->    
           <div class="st-resume-timeline-wrap">





             <div class="st-resume-timeline">
              <h3 class="st-resume-timeline-title"><?php echo $deneyimcek['deneyim_baslik']; ?></h3>
              <div class="st-resume-timeline-duration"><?php echo $deneyimcek['deneyim_tarih']; ?></div>
              <h4 class="st-resume-timeline-subtitle"><?php echo $deneyimcek['deneyim_mekan']; ?></h4>
              <div class="st-resume-timeline-text">
                <p><?php echo $deneyimcek['deneyim_detay']; ?></p>
              </div>
            </div> 
            <div class="st-height-b50 st-height-lg-b30"></div>


          </div>
          <!-- st-resume-timeline -->


        <?php } ?>




      </div>
    </div>

    <!-- Education -->
    <div class="col-lg-6">

      <div class="st-height-b0 st-height-lg-b50"></div>
      <div class="st-resume-wrap">
        <div class="st-resume-heading">
          <img src="assets/img/icon/resume-icon2.png" alt="resume-icon">
          <h2 class="st-resume-heading-title">Eğitim</h2>
        </div>
        <div class="st-height-b50 st-height-lg-b30"></div>



        <?php 

        $egitimsor=$db->prepare("select * from egitim");
        $egitimsor->execute(); 
        while ($egitimcek=$egitimsor->fetch(PDO::FETCH_ASSOC)) {



         ?>


         <!-- st-resume-timeline -->  
         <div class="st-resume-timeline-wrap">




          <div class="st-resume-timeline">
            <h3 class="st-resume-timeline-title"><?php echo $egitimcek['egitim_baslik']; ?></h3>
            <div class="st-resume-timeline-duration"><?php echo $egitimcek['egitim_tarih']; ?></div>
            <h4 class="st-resume-timeline-subtitle"><?php echo $egitimcek['egitim_mekan']; ?></h4>
            <div class="st-resume-timeline-text">
              <p><?php echo $egitimcek['egitim_detay']; ?></p>
            </div>
          </div> 
          <div class="st-height-b50 st-height-lg-b30"></div>





        </div>
        <!-- st-resume-timeline -->  

      <?php } ?>



    </div>
  </div>


</div>
</div>
<div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Resume Seciton -->



<!-- Start Portfolio Seciton -->
<section id="portfolyo">
  <div class="st-height-b50 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h4 class="st-section-heading-title">PORTFOLYOM</h4>
      <h2 class="st-section-heading-subtitle">PORTFOLYOM</h2>
    </div>
    <div class="st-height-b25 st-height-lg-b25"></div>
  </div>

  <div class="container">
    <div class="row">


      <?php 

      $portfolyosor=$db->prepare("select * from portfolyo order by portfolyo_id DESC limit 25");
      $portfolyosor->execute(); 
      while ($portfolyocek=$portfolyosor->fetch(PDO::FETCH_ASSOC)) {



       ?>


       <!-- Col -->
       <div  class="col-lg-4 col-md-6">
        <div  class="st-portfolio-single st-style1 st-lightgallery">
          <div  class="st-portfolio-item">

            <a style="width:330px;height: 330px" href="dimg/<?php echo $portfolyocek['portfolyo_resimyol']; ?>"  class="st-portfolio st-zoom st-lightbox-item">
              <div  class="st-portfolio-img st-zoom-in">
                <img style="width:330px;height: 330px" src="dimg/<?php echo $portfolyocek['portfolyo_resimyol']; ?>"  alt="portfolio">
              </div>


              <div class="st-portfolio-item-hover">
                <i class="fas fa-plus-circle"></i>
                <h5><?php echo $portfolyocek['portfolyo_ad']; ?></h5>
                <p><?php echo $portfolyocek['portfolyo_aciklama']; ?></p>
              </div>
            </a>


          </div>
        </div>
      </div>

    <?php } ?>
    <!-- Col -->









  </section>
  <!-- End Portfolio Seciton -->






  <!-- Start Review Seciton -->
  <section id="geridonusler" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">GERİ DÖNÜŞLER</h4>
        <h2 class="st-section-heading-subtitle">GERİ DÖNÜŞLER</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Reviews Container -->

    <div class="container">
      <div class="st-slider st-style1 st-reviews-wrap">
        <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="2000" data-center="0"
        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
        data-lg-slides="3" data-add-slides="3">
        <div class="slick-wrapper">



          <?php  

          $geridonussor=$db->prepare("select * from geridonus");
          $geridonussor->execute(); 
          while ($geridonuscek=$geridonussor->fetch(PDO::FETCH_ASSOC)) {

           ?>

           <!-- .slick-slide-in -->
           <div class="slick-slide-in">
            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-testimonial-text">
                <p><?php echo $geridonuscek['geridonus_metin']; ?></p>
                <div class="st-quote"><img src="assets/img/icon/quote.png" alt="quote"></div>
              </div>
              <div class="st-testimonial-info">
                <div class="st-testimonial-img"><img src="dimg/<?php echo $geridonuscek['geridonus_logo']; ?>" alt="client1"></div>
                <div class="st-testimonial-meta">
                  <h4 class="st-testimonial-name"><?php echo $geridonuscek['geridonus_firma'] ?></h4>
                  <div class="st-testimonial-designation"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- .slick-slide-in -->

        <?php } ?>




      </div>
    </div><!-- .slick-container -->



    <div class="pagination st-style1 st-flex st-hidden"></div>
    <!-- If dont need Pagination then add class .st-hidden -->
    <div class="swipe-arrow st-style1 st-hidden">
      <!-- If dont need navigation then add class .st-hidden -->
      <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
      <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
    </div>
  </div><!-- .st-slider -->
</div>
<div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Review Seciton -->








<!-- Start Contact Seciton -->
<section id="iletisim" class="">
  <div class="st-height-b100 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h4 class="st-section-heading-title">BANA ULAŞ</h4>
      <h2 class="st-section-heading-subtitle">BANA ULAŞ</h2>
    </div>
    <div class="st-height-b25 st-height-lg-b25"></div>
  </div>

  <!-- php echo $ayarcek['ayar_siteurl']; ?>/phpmail/index.php -->

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="st-contact-title"></h3>
        <div id="st-alert"></div>
        <form action="<?php echo $ayarcek['ayar_siteurl']; ?>/phpmail/index.php" method="POST" enctype="multipart/form-data" class="st-contact-form" id="banaulas">
          <div class="st-form-field">
            <input type="text" id="name" name="isim" placeholder="İsim" required>
          </div>
          <div class="st-form-field">
            <input type="text" id="email" name="eposta" placeholder="E-Mail Adresi" required>
          </div>
          <div class="st-form-field">
            <input type="text" id="subject" name="konu" placeholder="Konu" required>
          </div>
          <div class="st-form-field">
            <textarea cols="30" rows="10" id="msg" name="mesaj" placeholder="Mesaj" required></textarea>
          </div>
          <button class="st-btn st-style1 st-color1" type="submit" id="submit" name="iletisimform">Gönder</button>
        </form>
      </div>
      <div class="st-height-b0 st-height-lg-b30"></div>

      <div class="col-lg-6">
        <div class="st-height-b0 st-height-lg-b40"></div>
        <h3 class="st-contact-title">İletişim Bilgileri</h3>
        <div class="st-contact-text">
          Aşağıda ki adreslerden bana ulaşabilirsiniz.
        </div>
        <div class="st-contact-info-wrap">
          <div class="st-single-contact-info">
            <i class="fas fa-envelope"></i>
            <div class="st-single-info-details">
              <h4>E-mail</h4>
              <a href=""><?php echo $ayarcek['ayar_mail']; ?></a>

            </div>
          </div>
          <div class="st-single-contact-info">
            <i class="fas fa-phone-alt"></i>
            <div class="st-single-info-details">
              <h4>Telefon</h4>
              <span><?php echo $ayarcek['ayar_tel']; ?></span>
              <span><?php echo $ayarcek['ayar_gsm']; ?></span>
            </div>
          </div>
          <div class="st-single-contact-info">
            <i class="fas fa-map-marker-alt"></i>
            <div class="st-single-info-details">
              <h4>Adres</h4>
              <span><?php echo $ayarcek['ayar_adress']; ?></span>
              <span><?php echo $ayarcek['ayar_il']; ?></span>
              <span><?php echo $ayarcek['ayar_ilce']; ?></span>
            </div>

          </div>
          <div class="st-social-info">
            <div class="st-social-text">Sosyal Medya Profillerim</div>
            <div class="st-social-link">
              <a href="<?php echo $ayarcek['ayar_google']; ?>" target="_blank" class="st-social-btn  active">
                <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                <span class="st-icon-name">LinkedIn</span>
              </a>
              <a href="<?php echo $ayarcek['ayar_facebook']; ?>" target="_blank"  class="st-social-btn">
                <span class="st-social-icon"><i class="fab fa-facebook"></i></span>
                <span class="st-icon-name">Facebook</span>
              </a>
              <a href="<?php echo $ayarcek['ayar_youtube']; ?>" target="_blank"  class="st-social-btn">
                <span class="st-social-icon"><i class="fab fa-youtube"></i></span>
                <span class="st-icon-name">YouTube</span>
              </a>
              <a href="<?php echo $ayarcek['ayar_x']; ?>" target="_blank"  class="st-social-btn">
                <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
                <span class="st-icon-name">X</span>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="st-height-b100 st-height-lg-b80"></div>
</section>
<!-- End Contact Seciton -->



<?php include 'footer.php' ?>