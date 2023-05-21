<?php

  include_once realpath('PHPMailer/src/PHPMailer.php');
  include_once realpath('PHPMailer/src/SMTP.php');
  include_once realpath('PHPMailer/src/Exception.php');

  if(isset($_POST['send'])){
    /*$msj="$_POST["message"]";*/
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //authentication SMTP enabled
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    //indico el puerto que usa Gmail 465 or 587
    $mail->Port = 465; 
    $mail->Username = "fortestuse59@gmail.com";
    $mail->Password = "azyyyugjxrnnhpvv";
    $mail->SetFrom("fortestuse59@gmail.com","from ben's project");
   
    $mail->Subject = $_POST["subject"];
    $mail->MsgHTML($_POST["message"]);
    $mail->AddAddress($_POST["email"]);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }else {
    echo "<script>
    alert('send success');
    document.location.href ='mail_index.php';
    </script>";
    }

 
}
?>