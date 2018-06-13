<?php
class Email{

   public static function sendEmail($emailAddress, $messageBody){

    require_once '../app/PHPMailer/src/PHPMailer.php';
    require_once '../app/PHPMailer/src/Exception.php';
    require_once '../app/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        /* Server settings: */

        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username ="AuctioX.TW1@gmail.com";             // SMTP username
        $mail->Password = "AuctioX123";                         // SMTP password
        $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        /* Recipients: */

        $mail->setFrom("AuctioX.TW1@gmail.com");
        $mail->addAddress($emailAddress);                     // Add a recipient

        /* Content: */

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "AuctioX";

        $mail->Body=$messageBody ;
        $mail->AltBody =strip_tags($messageBody);

        $mail->send();
    } catch (Exception $e){
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
   }
}
?>
