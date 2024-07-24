<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
if(isset($_POST['name'])){
	$font="BRUSHSCI.TTF";
	$image=imagecreatefromjpeg("certificate3.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$name="This is to certify that ".$_POST['name'].",brearing ID Number\n"
	.$_POST['id']."completed all the jvds and is eligible for a No Due Certificate.\n"
	.$_POST['name']."has fulfilled all academic and financial obligations,\nand there are no outstanding dues or pending matters as of the date of this certificate";

	imagettftext($image,20,0,90,350,$color,$font,$name);
	imagettftext($image,50,0,215,280,$color,$font,$_POST['name']);
	//imagettftext($image,20,0,400,340,$color,$font,$_POST['name']);
	//imagettftext($image,20,0,290,370,$color,$font,$_POST['id']);
	//imagettftext($image,20,0,360,390,$color,$font,$_POST['name']);
	$date="8th DEC 2023";
	imagettftext($image,20,0,600,100,$color,"AGENCYR.TTF",$date);
	$file=time();
	$file_path="Certificates/".$file.".jpg";
	$file_path_pdf="Certificates/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);

	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,200,300);
	$pdf->Output($file_path_pdf,"F");
// Load PHPMailer classes
require "phpmailer/src/SMTP.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/Exception.php";
include('smtp/PHPMailerAutoload.php');
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="sailahiri61@gmail.com";
$mail->Password="khuj ihrd emiq xfli";
$mail->setFrom("sailahiri61@gmail.com");
$mail->addAddress($_POST['email']);
$mail->isHTML(true);
$mail->Subject="NO DUE CERTIFICATE";
$mail->Body="Dear".$_POST['name']."You Have Completed All Your JVD'S.";
$mail->addAttachment($file_path_pdf);
$mail->SMTPOptions=array("ssl"=>array(
    "verify_peer"=>false,
    "verify_peer_name"=>false,
    "allow_self_signed"=>false,
));
if($mail->send()){
    echo "Send";
}else{
    echo $mail->ErrorInfo;
}
}
?>
<form method="post">
	<input type="textbox" name="name"/><br>
	<input type="text" name="id"/><br>
	<input type="email" name="email" placeholder="Enter email"/><br>
	<input type="submit"/>
</form>