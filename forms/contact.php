<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'Portfolio - '.$_POST['subject'];
    $message = $_POST['message'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: ".ucwords($name)." <$email>";
    $returnpath = "-f"."$email";
    @mail("devspec1@gmail.com", $subject, $message, $headers, $returnpath);
    echo 'OK';
?>
