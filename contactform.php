<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "giuliacoutts@yahoo.com.au";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a message from ".$name."./n/n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}