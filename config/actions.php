<?php

    // Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $mess = $_POST['message'];

        //Load Composer's autoloader
        require '../PHPMailer/Exception.php';
        require '../PHPMailer/PHPMailer.php';
        require '../PHPMailer/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'trymail916@gmail.com';                 //SMTP username
            $mail->Password   = 'wgil czxg kyys wtnn';                  //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('trymail916@gmail.com', 'Contact Form');
            $mail->addAddress('trymail916@gmail.com', 'Taran Saini');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = 'Here is the subject';
            // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

            $mail->Subject = "$subject";
            $mail->Body    = "Sender Name: $fname <br> Sender Email: $email <br> Sender Mob. No.: $phone <br> Message: $mess";
            // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }

    // TO LOCATE AGAIN ON INDEX PAGE
    // header("Location: ../index.php");
            

?>
