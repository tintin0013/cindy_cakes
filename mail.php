<?php

$to      = 'tintin0013@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com';
$headers .=  "Content-Type: text/html; charset=utf-8\r\n";
$headers .=  "MIME-Version: 1.0\r\n";



if (mail($to, $subject, $message, $headers)) {
    echo " c'est good";
} else {
    echo " no match";
}