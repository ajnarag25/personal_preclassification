<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $mail = new PHPMailer;

    $email = $emails;
    $names = "Feedback Response";

    //SMTP Settings
    $mail->SMTPDebug = 0; 

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "lyka6356@gmail.com";
    $mail->Password = "pbdv ityl sbdx lgtc";
    $mail->Port = 587; //465 for ssl and 587 for tls
    $mail->SMTPSecure = "tls";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $names);
    $mail->addAddress($emails);
    $mail->Subject = "Personnal Preclassification";
    $mail->Body = nl2br($messages."\n \n" .'Personnal Preclassification 2023 - 2024');


    if ($mail->send())
        echo "Mail Sent";

    else
        // echo('Error sending the email');

?>
