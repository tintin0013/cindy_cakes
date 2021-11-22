<?php

function clean($string)
{
    $string = stripslashes($string);
    $string = trim($string);
    $string = htmlspecialChars($string);
    return $string;
}