<?php 


ob_start();
session_start();


include '../admin/conAdmin/baglan.php';

$ayarsor=$db->prepare("select * from ayar");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

 ?>

<?php  


$smtppuser="<?php echo $ayarcek['ayar_smtpuser']; ?>";
$smtphost="<?php echo $ayarcek['ayar_smtphost']; ?>";
$smtpport="<?php echo $ayarcek['ayar_smtpport']; ?>";
$smtppass="<?php echo $ayarcek['ayar_smtppassword']; ?>";


if (isset($_POST['iletisimform'])) {

$isim = htmlspecialchars(trim($_POST['isim']));
$eposta = htmlspecialchars(trim($_POST['eposta']));
$konu = htmlspecialchars(trim($_POST['konu']));
$mesaj = htmlspecialchars(trim($_POST['mesaj']));




include 'class.phpmailer.php';
$eposta1=$smtpuser;
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = false;
$mail->Host = $smtphost;
$mail->Port = $smtpport;
$mail->SMTPSecure = 'tls';
$mail->Username = $smtppuser;
$mail->Password = $smtppassword;
$mail->SetFrom($mail->Username, $isim);
$mail->AddAdress($eposta1, $isim);
$mail->AddAdress($eposta, $isim);
$mail->CharSet = 'UTF-8';
$mail->Subject = 'İletişim Formu';




	
}





?>