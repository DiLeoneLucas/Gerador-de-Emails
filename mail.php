<?php
/*
Página que escreve o email para q recuperação da senha de um usuário.
*/

require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");

function enviarEmail($assunto,$mensagem,$emailDestinatario){
   $mail = new PHPMailer\PHPMailer\PHPMailer();
   $mail->IsSMTP(); // enable SMTP
   $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
   $mail->SMTPAuth = true; // authentication enabled
   $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
   $mail->Host = "mail.camaraviamao.rs.gov.br";
   $mail->Port = 465; // or 587
   $mail->IsHTML(true);
   $mail->CharSet ='UFT-8';
   $mail->Username = "informatica@camaraviamao.rs.gov.br";
   $mail->Password = "mailti050";
   $mail->SetFrom("informatica@camaraviamao.rs.gov.br");
   $mail->Subject = utf8_decode( $assunto);
   $mail->Body = utf8_decode( $mensagem);
   $mail->AddAddress($emailDestinatario);
   var_dump($mail->AddAddress($emailDestinatario));
   //exit;
      if(!$mail->Send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
         echo "Mensagem enviada com sucesso";
      }
}
 
?>