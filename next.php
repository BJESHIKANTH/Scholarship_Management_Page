<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require "phpmailer/src/SMTP.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/Exception.php";
if(isset($_POST["send"])){
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='sailahiri61@gmail.com';
    $mail->Password='khuj ihrd emiq xfli ';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    $mail->setFrom('sailahiri61@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];
    $mail->send();
    echo "
    <script>
    alert('Sent  Succsessfully');
    document.location.href='certificate.php';
    </script>
    ";
}
?>