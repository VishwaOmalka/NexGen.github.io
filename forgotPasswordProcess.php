<?php

include "connection.php";

include "SMTP.php";
include "PHPMailer.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){

    $email = $_GET["e"];

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."'");
    $n = $rs->num_rows;

    if($n == 1){

        $code = uniqid();
        Database::iud("UPDATE `user` SET `verification_code`='".$code."' WHERE `email`='".$email."'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vishwaomalka7@gmail.com';
        $mail->Password = 'omqxkzerxajefkbx';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('vishwaomalka7@gmail.com', 'Reset Password');
        $mail->addReplyTo('vishwaomalka7@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'NexGenElectronics : Forgot password Verification Code';
        $bodyContent = '<h2 style="color:black;">Your Verification Code is</h2>' . '<b><h1 style="color:blue;">'.$code.'</h1></b>';
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo 'Verification code sending failed.';
        }else{
            echo 'Success';
        }

    }else{
        echo ("Invalid Email Address.");
    }

}else{
    echo ("Please enter your Email Address in Email Field.");
}

?>