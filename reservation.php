<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/../php-mail-main/vendor/autoload.php';



if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'zalite.ieva2@gmail.com';                     
    $mail->Password   = '';                               
    $mail->SMTPSecure = "ssl";              // ssl,   tls
    $mail->Port       = 465;               //ssl-465     tls-587               

    //Recipients
    $mail->setFrom('zalite.ieva2@gmail.com', 'Anete Photography');
    $mail->addAddress($email);     
               
   

    // Add Attachments
        
    //$mail->addAttachment('image.jpg', 'new.jpg');    

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Thank you for your message';
    $mail->Body    = "
    <html>
    <body>
    Thank you . $name . for your message! We will contact you back shortly.
    Your message: .$message. <br>
    </body>
    </html>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()){
    echo 'Message not sent' .$mail->error;
    } 
    else{
    echo "Message sent successfully";
    }
}
?>