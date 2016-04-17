<?php


function sanitize($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

function myEncode($data) {
    $data = strtolower($data);
    $data = strtr($data, " ", "_");
    return $data;
}


$statusMessages = array(
    200 => 'OK',
    401 => 'Unauthorized',
    404 => 'Not Found',
    405 => 'Method Not Allowed',
    500 => 'Internal Server Error',
);

 ?>
