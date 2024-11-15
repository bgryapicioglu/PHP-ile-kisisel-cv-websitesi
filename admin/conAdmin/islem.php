<?php 

ob_start();
session_start();
include  'baglan.php';

if (isset($_POST['genel-ayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_siteurl=:url,
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_author=:author

		WHERE ayar_id = 0 ");




	$update = $ayarkaydet->execute(array(
		'url' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'author' => $_POST['ayar_author']
	));

	if ($update) {

		header("Location:../genel-ayar.php?durum=ok");



	} 
	else {



		header("Location:../genel-ayar.php?durum=no");

	}
}



if (isset($_POST['iletisim-ayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_mail=:mail,
		ayar_adress=:adress,
		ayar_ilce=:ilce,
		ayar_il=:il

		WHERE ayar_id = 0 ");


	$update = $ayarkaydet->execute(array(
		'tel' => $_POST['ayar_tel'],
		'gsm' => $_POST['ayar_gsm'],
		'faks' => $_POST['ayar_faks'],
		'mail' => $_POST['ayar_mail'],
		'adress' => $_POST['ayar_adress'],
		'ilce' => $_POST['ayar_ilce'],
		'il' => $_POST['ayar_il']
	));

	if ($update) {

		header("Location:../iletisim-ayar.php?durum=ok");



	} 
	else {



		header("Location:../iletisim-ayar.php?durum=no");

	}
}




if (isset($_POST['api-ayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_googlemap=:googlemap,
		ayar_analystic=:analystic


		WHERE ayar_id = 0 ");


	$update = $ayarkaydet->execute(array(
		'recapctha' => $_POST['ayar_recapctha'],
		'googlemap' => $_POST['ayar_googlemap'],
		'analystic' => $_POST['ayar_analystic']

	));

	if ($update) {

		header("Location:../api-ayar.php?durum=ok");



	} 
	else {



		header("Location:../apiayar.php?durum=no");

	}
}



if (isset($_POST['sosyalmedya-ayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:facebook,
		ayar_x=:x,
		ayar_youtube=:youtube,
		ayar_google=:google


		WHERE ayar_id = 0 ");


	$update = $ayarkaydet->execute(array(
		'facebook' => $_POST['ayar_facebook'],
		'x' => $_POST['ayar_x'],
		'youtube' => $_POST['ayar_youtube'],
		'google' => $_POST['ayar_google']

	));

	if ($update) {

		header("Location:../sosyalmedya-ayar.php?durum=ok");



	} 
	else {



		header("Location:../sosyalmedya-ayar.php?durum=no");

	}
}



if (isset($_POST['smtp-ayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport


		WHERE ayar_id = 0 ");


	$update = $ayarkaydet->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']

	));

	if ($update) {

		header("Location:../smtp-ayar.php?durum=ok");



	} 
	else {



		header("Location:../smtp-ayar.php?durum=no");

	}
}



if (isset($_POST['anasayfa-kaydet'])) {





	$uploads_dir = '../../dimg';
	@$tmp_name = $_FILES['anasayfa_logo']["tmp_name"];
	@$name = $_FILES['anasayfa_logo']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$anasayfayol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$anasayfakaydet=$db->prepare("UPDATE anasayfa SET
		anasayfa_isim=:isim,
		anasayfa_baslik=:baslik,
		anasayfa_detay=:detay,
		anasayfa_logo=:logo

		WHERE anasayfa_id = 0 ");

	$update = $anasayfakaydet->execute(array(

		
		'isim' => $_POST['anasayfa_isim'],
		'baslik' => $_POST['anasayfa_baslik'],
		'detay' => $_POST['anasayfa_detay'],
		'logo' => $anasayfayol

		



	));

	if ($update) {
		header("Location:../anasayfa-ayar.php?durum=ok");
	}

	else {
		header("Location:../anasayfa-ayar.php?durum=no");



	}
}






if (isset($_POST['portfolyokaydet'])) {


	$uploads_dir = '../../dimg/portfolyoDosya';
	@$tmp_name = $_FILES['portfolyo_resimyol']["tmp_name"];
	@$name = $_FILES['portfolyo_resimyol']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$portfolyoyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");






	$kaydet=$db->prepare("INSERT INTO portfolyo SET
		portfolyo_ad=:ad,
		portfolyo_aciklama=:aciklama,
		portfolyo_sira=:sira,
		portfolyo_durum=:durum,
		portfolyo_resimyol=:resimyol
		");

	$insert = $kaydet->execute(array(
		'ad' => $_POST['portfolyo_ad'],
		'sira' => $_POST['portfolyo_sira'],
		'aciklama' => $_POST['portfolyo_aciklama'],
		'durum' => $_POST['portfolyo_durum'],
		'resimyol' => $portfolyoyol

	));

	if ($insert) {

		header("Location:../portfolyo.php?durum=ok");



	} 
	else {



		header("Location:../portfolyo.php?durum=no");

	}
}



if ($_GET['portfolyosil']=="ok") {
	

	$sil=$db->prepare("DELETE from portfolyo WHERE portfolyo_id=:portfolyo_id");
	$kontrol=$sil->execute(array(
		'portfolyo_id' => $_GET['portfolyo_id']
	));

	if ($kontrol) {

		header("Location:../portfolyo.php?durum=ok");



	} 
	else {



		header("Location:../portfolyo.php?durum=no");

	}

}








if (isset($_POST['hakkimdakaydet'])) {





	$uploads_dir = '../../dimg/hakkimdaDosya';
	@$tmp_name = $_FILES['hakkimda_fotograf']["tmp_name"];
	@$name = $_FILES['hakkimda_fotograf']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$hakkimdayol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



	$uploads_dir = '../../dimg/hakkimdaDosya';
	@$tmp_name = $_FILES['hakkimda_cvindir']["tmp_name"];
	@$name = $_FILES['hakkimda_cvindir']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$hakkimdacvyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




	$hakkimdakaydet=$db->prepare("UPDATE hakkimda SET
		hakkimda_baslik=:hakbaslik,
		hakkimda_meslek=:hakmeslek,
		hakkimda_aciklama=:hakaciklama,
		hakkimda_dt=:hakdt,
		hakkimda_diller=:hakdil,
		hakkimda_cvindir=:hakkimdacv,
		hakkimda_fotograf=:hakfotograf

		WHERE hakkimda_id = 0 ");

	$update = $hakkimdakaydet->execute(array(

		
		'hakbaslik' => $_POST['hakkimda_baslik'],
		'hakmeslek' => $_POST['hakkimda_meslek'],
		'hakaciklama' => $_POST['hakkimda_aciklama'],
		'hakdt' => $_POST['hakkimda_dt'],
		'hakdil' => $_POST['hakkimda_diller'],

		'hakkimdacv' => $hakkimdacvyol,
		'hakfotograf' => $hakkimdayol

		



	));

	if ($update) {
		header("Location:../hakkimda.php?durum=ok");
	}

	else {
		header("Location:../hakkimda.php?durum=no");



	}
}






if (isset($_POST['hizmetkaydet'])) {


	

	$kaydet=$db->prepare("INSERT INTO hizmetler SET
		hizmet_icon=:hicon,
		hizmet_viewbox=:hview,
		hizmet_baslik=:hbaslik,
		hizmet_detay=:hdetay
		");

	$insert = $kaydet->execute(array(
		'hicon' => $_POST['hizmet_icon'],
		'hview' => $_POST['hizmet_viewbox'],
		'hbaslik' => $_POST['hizmet_baslik'],
		'hdetay' => $_POST['hizmet_detay']

	));

	if ($insert) {

		header("Location:../hizmetlerim.php?durum=ok");



	} 
	else {



		header("Location:../hizmetlerim.php?durum=no");

	}
}

if ($_GET['hizmetlersil']=="ok") {
	

	$hizmetsil=$db->prepare("DELETE from hizmetler WHERE hizmet_id=:hizmet_id");
	$kontrol=$hizmetsil->execute(array(
		'hizmet_id' => $_GET['hizmet_id']
	));

	if ($kontrol) {

		header("Location:../hizmetlerim.php?durum=ok");



	} 
	else {



		header("Location:../hizmetlerim.php?durum=no");

	}

}




if (isset($_POST['yeteneklerimkaydet'])) {


	

	$kaydet=$db->prepare("UPDATE yetenek SET
		yetenek_baslik=:ybaslik,
		yetenek_detay1=:ydetay1,
		yetenek_detay2=:ydetay2
		");

	$update = $kaydet->execute(array(
		'ybaslik' => $_POST['yetenek_baslik'],
		'ydetay1' => $_POST['yetenek_detay1'],
		'ydetay2' => $_POST['yetenek_detay2']

	));

	if ($update) {

		header("Location:../yetkinliklerim.php?durum=ok");



	} 
	else {



		header("Location:../yetkinliklerim.php?durum=no");

	}
}







if (isset($_POST['yetdetaykaydet'])) {


	

	$kaydet=$db->prepare("INSERT INTO yetdetay SET
		yetenek_isim=:yisim,
		yetenek_yuzde=:yyuzde
		");

	$insert = $kaydet->execute(array(
		'yisim' => $_POST['yetenek_isim'],
		'yyuzde' => $_POST['yetenek_yuzde']

	));

	if ($insert) {

		header("Location:../yetkinlik-ekle.php?durum=ok");



	} 
	else {



		header("Location:../yetkinlik-ekle.php?durum=no");

	}
}



if ($_GET['yeteneksil']=="ok") {
	

	$yeteneksil=$db->prepare("DELETE from yetdetay WHERE yetdetay_id=:yetdetay_id");
	$kontrol=$yeteneksil->execute(array(
		'yetdetay_id' => $_GET['yetdetay_id']
	));

	if ($kontrol) {

		header("Location:../yeteneklerim-ekle.php?durum=ok");



	} 
	else {



		header("Location:../yeteneklerim-ekle.php?durum=no");

	}

}




if (isset($_POST['deneyimkaydet'])) {


	

	$kaydet=$db->prepare("INSERT INTO deneyim SET
		deneyim_baslik=:dbaslik,
		deneyim_tarih=:dtarih,
		deneyim_mekan=:dmekan,
		deneyim_detay=:yyuzde
		");

	$insert = $kaydet->execute(array(
		'dbaslik' => $_POST['deneyim_baslik'],
		'dtarih' => $_POST['deneyim_tarih'],
		'dmekan' => $_POST['deneyim_mekan'],
		'yyuzde' => $_POST['deneyim_detay']

	));

	if ($insert) {

		header("Location:../deneyim.php?durum=ok");



	} 
	else {



		header("Location:../deneyim.php?durum=no");

	}
}


if ($_GET['deneyimsil']=="ok") {
	

	$deneyimsil=$db->prepare("DELETE from deneyim WHERE deneyim_id=:deneyim_id");
	$kontrol=$deneyimsil->execute(array(
		'deneyim_id' => $_GET['deneyim_id']
	));

	if ($kontrol) {

		header("Location:../deneyim.php?durum=ok");



	} 
	else {



		header("Location:../deneyim.php?durum=no");

	}

}




if (isset($_POST['egitimkaydet'])) {


	

	$kaydet=$db->prepare("INSERT INTO egitim SET
		egitim_baslik=:ebaslik,
		egitim_tarih=:etarih,
		egitim_mekan=:emekan,
		egitim_detay=:edetay
		");

	$insert = $kaydet->execute(array(
		'ebaslik' => $_POST['egitim_baslik'],
		'etarih' => $_POST['egitim_tarih'],
		'emekan' => $_POST['egitim_mekan'],
		'edetay' => $_POST['egitim_detay']

	));

	if ($insert) {

		header("Location:../egitim?durum=ok");



	} 
	else {



		header("Location:../egitim?durum=no");

	}
}


if ($_GET['egitimsil']=="ok") {
	

	$egitimsil=$db->prepare("DELETE from egitim WHERE egitim_id=:egitim_id");
	$kontrol=$egitimsil->execute(array(
		'egitim_id' => $_GET['egitim_id']
	));

	if ($kontrol) {

		header("Location:../egitim.php?durum=ok");



	} 
	else {



		header("Location:../egitim.php?durum=no");

	}

}




if (isset($_POST['blogekle'])) {


	$uploads_dir = '../../dimg/hakkimdaDosya';
	@$tmp_name = $_FILES['blog_kucukresim']["tmp_name"];
	@$name = $_FILES['blog_kucukresim']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$kucukresimyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



	$uploads_dir = '../../dimg/hakkimdaDosya';
	@$tmp_name = $_FILES['detay_resim']["tmp_name"];
	@$name = $_FILES['detay_resim']["name"];

	$benzersizsayi5=rand(20000,32000);
	$benzersizsayi6=rand(20000,32000);
	$benzersizsayi7=rand(20000,32000);
	$benzersizsayi8=rand(20000,32000);

	$benzersizad=$benzersizsayi5.$benzersizsayi6.$benzersizsayi7.$benzersizsayi8;

	$detayresimyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	




	$kaydet=$db->prepare("INSERT INTO blog SET

		blog_kimden=:bkimden,
		blog_date=:bdate,
		blog_baslik=:bbaslik,
		blog_yazi=:byazi,


		blog_kucukresim=:bkucukresim,
		detay_resim=:dresim


		");

	$insert = $kaydet->execute(array(
		
		'bkimden' => $_POST['blog_kimden'],
		'bdate' => $_POST['blog_date'],
		'bbaslik' => $_POST['blog_baslik'],
		'byazi' => $_POST['blog_yazi'],


		'bkucukresim' => $kucukresimyol,
		'dresim' => $detayresimyol

	));

	if ($insert) {

		header("Location:../blog.php?durum=ok");



	} 
	else {



		header("Location:../blog.php?durum=no");

	}
}


if ($_GET['blogsil']=="ok") {
	

	$sil=$db->prepare("DELETE from blog WHERE blog_id=:blog_id");
	$kontrol=$sil->execute(array(
		'blog_id' => $_GET['blog_id']
	));

	if ($kontrol) {

		header("Location:../blog.php?durum=ok");



	} 
	else {



		header("Location:../blog.php?durum=no");

	}

}







if (isset($_POST['geridonusekle'])) {


	$uploads_dir = '../../dimg/geridonusDosya';
	@$tmp_name = $_FILES['geridonus_logo']["tmp_name"];
	@$name = $_FILES['geridonus_logo']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$geridonusyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$kaydet=$db->prepare("INSERT INTO geridonus SET

		geridonus_metin=:gmetin,
		geridonus_firma=:gfirma,


		geridonus_logo=:glogo


		");

	$insert = $kaydet->execute(array(
		
		'gmetin' => $_POST['geridonus_metin'],
		'gfirma' => $_POST['geridonus_firma'],

		'glogo' => $geridonusyol


	));

	if ($insert) {

		header("Location:../geridonus.php?durum=ok");



	} 
	else {



		header("Location:../geridonus.php?durum=no");

	}
}



if ($_GET['geridonussil']=="ok") {
	

	$sil=$db->prepare("DELETE from geridonus WHERE geridonus_id=:geridonus_id");
	$kontrol=$sil->execute(array(
		'geridonus_id' => $_GET['geridonus_id']
	));

	if ($kontrol) {

		header("Location:../geridonus.php?durum=ok");



	} 
	else {



		header("Location:../geridonus.php?durum=no");

	}

}




if (isset($_POST['girisyapbtn'])) {
	$kullanici_adi = $_POST['kullanici_adi'];
	$kullanici_sifre = md5($_POST['kullanici_sifre']);

	if ($kullanici_adi && $kullanici_sifre) {

		$sorgula = $db -> prepare("SELECT kullanici_adi, kullanici_sifre  FROM kullanici WHERE kullanici_adi='$kullanici_adi' AND kullanici_sifre='$kullanici_sifre' ");
		$sorgula->execute(array($kullanici_adi,$kullanici_sifre));
		$row = $sorgula->fetch(PDO::FETCH_BOTH);

		if ($sorgula->rowCount() > 0) {
			$_SESSION['kullanici_adi'] = $kullanici_adi;
			header('Location:../index.php');
		} else {
			header('Location:../login.php?login=no');
		}
	}
}







if (isset($_POST['sifreguncelle'])) {


	

	$kaydet=$db->prepare("UPDATE kullanici SET
		kullanici_adi=:kadi,
		kullanici_sifre=:ksifre
		");

	$update = $kaydet->execute(array(
		'kadi' => $_POST['kullanici_adi'],
		'ksifre' => md5($_POST['kullanici_sifre'])


	));

	if ($update) {

		header("Location:../login-ayar.php?durum=ok");



	} 
	else {



		header("Location:../login-ayar.php?durum=no");

	}
}








?>