<?php

$receiver = "chenangelia24@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "angel lausai bo soi kha cheng";
$sender = "From: della.002@ski.sch.id";

if( mail($receiver, $subject, $body, $sender) ){
    echo "Email sent successfully to $receiver";
} else {
    echo "Sorry, failed while sending mail!";
}

?>