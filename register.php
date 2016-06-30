<?php

session_start();
include('configdb.php');
if (isset($_POST['submit'])) {
    //whether the username is blank
    if ($_POST['name'] == '') {
        $_SESSION['error']['name'] = "Field Name harus diisi.";
    }
    //whether the email is blank
    if ($_POST['email'] == '') {
        $_SESSION['error']['email'] = "Field E-mail harus diisi.";
    } else {
        //whether the email format is correct
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) {
            //if it has the correct format whether the email has already exist
            $email = $_POST['email'];
            $sql1 = "SELECT * FROM user WHERE email = '$email'";
            $result1 = mysqli_query($mysqli, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['email'] = "Email telah digunakan.";
            }
        } else {
            //this error will set if the email format is not correct
            $_SESSION['error']['email'] = "Email tidak valid.";
        }
    }
    //whether the password is blank
    if ($_POST['phone'] == '') {
        $_SESSION['error']['phone'] = "Field Phone harus diisi.";
    }
    if ($_POST['occupation'] == '') {
        $_SESSION['error']['occupation'] = "Field Occupation harus diisi.";
    }
    //if the error exist, we will go to registration form
    if (isset($_SESSION['error'])) {
        header("Location: index.php");
        exit;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $occupation= $_POST['occupation'];
        $com_code = md5(uniqid(rand()));

        $sql2 = "INSERT INTO user (Name, Email, Phone, Occupation, com_code) VALUES ('$name', '$email', '$phone', '$occupation', '$com_code')";
        $result2 = mysqli_query($mysqli, $sql2) or die(mysqli_error());

        if ($result2) {

            require 'PHPMailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'emailanda@gmail.com';                 // SMTP username
            $mail->Password = 'password-emailanda@gmail.com';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //$mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('emailpenerima@gmail.com');     // Add a recipient menggunakan alamat email yang lain 
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
           // $mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Registration';
            $mail->Body = 'Ada user yang mendaftar dengan identitas sebagai berikut <br> username:'.$name.'<br> email : '.$email .'<br> phone : '.$phone .'<br> occupation : '.$occupation .'<br>Terima kasih';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

//            //$to = $email;
//            $to = "if413061@gmail.com";
//            $subject = "Confirmation from TutsforWeb to $username";
//            $header = "TutsforWeb: Confirmation from TutsforWeb";
//            $message = "Please click the link below to verify and activate your account. rn";
//            $message .= "http://www.yourname.com/confirm.php?passkey=$com_code";
//            $sentmail = mail($to, $subject, $message, $header);
//
//            if ($sentmail) {
//                echo "Your Confirmation link Has Been Sent To Your Email Address.";
//            } else {
//                echo "Cannot send Confirmation link to your e-mail address";
//            }
        }
    }
}
?>