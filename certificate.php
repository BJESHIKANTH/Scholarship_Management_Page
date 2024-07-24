<?php 
session_start();
$name1==$_SESSION['name'];
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // ... rest of the code
} 
?>
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
	$pdf->Image($file_path,0,0,200,200);
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
$mail->Body=$name;
$mail->addAttachment($file_path);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
body{
    background-color:rgb(195, 195, 201);
    font-family: cursive;
    font-size: 20px;
}
.container{
    background-color:white;
    width:40%;
   padding: 20px;
    margin-left: 30%;
    margin-top: 13%;
    align-items: center;
    text-align: center;
    justify-content: center;
    border-radius: 10px;
}
input{
    background-color:rgb(195, 195, 201);
    height: 25px;
    opacity: 5px;
}
button{
    width:20%;
    height:40px;
    background-color: rgb(64,86,182);
    border-radius: 10px;
}
button:hover{
    background-color: white;
    border:2px solid black;
    color:black;
}
</style>
</head>
<body>
    <div class="container">
    <form  method="post">
        <br><br>
        <label for="name">Name</label><br>
        <input type="textbox" name="name"/><br>
	    <label>ID Number:</label><br>
        <input type="text" name="id"/><br><br>
        <label for="name">Email</label><br>
        <input type="email" name="email" id="email" style="height: 23px;"><br>
        <label for="name">Subject</label><br>
        <input type="text" name="subject"  value="" id="sub"><br><br>
       <button type="submit" name="send">Send Email</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Add this line to include SweetAlert library -->
        <script> 
 $(document).ready(function() {
                var email = '<?php echo $_SESSION['email1']; ?>';
                $('#email').val(email);
 });

</script>
</body>
</html>