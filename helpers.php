<?php

function generateChars($length) {

    return generate('abcdefghijklmnopqrstuvwxyz0123456789', $length);
}

function generateDigits($length) {

    return generate('0123456789', $length);
}

function generate($chars, $length) {

    $output = '';

    for ($i=0; $i<$length; $i++) {

        $output .= $chars[mt_rand(0, strlen($chars)-1)];
    }

    return $output;
}
