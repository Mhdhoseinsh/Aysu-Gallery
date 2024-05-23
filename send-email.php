<?php
$to = $_POST['email'];
$from = "alivatanpoor.av@gmail.com";
$message = $_POST['text'];
if($to == '') {
echo "error";
} else{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
     $headers = 'Content-type: text/html; charset=utf-8';
    $headers = "From:" . $from;
    if(mail($to, $from, $message, $headers)) {
    echo 'true';
} else{
    echo 'false';
}
}