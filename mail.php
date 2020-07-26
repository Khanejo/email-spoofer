<?php

// email vars

$newline = "\r\n";
$mail_to = $_POST['mail_to'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$mail_from = $_POST['mail_from'];
$headers = 'From: ' . $mail_from;

$count = $_POST['count'];
// information

if ( isset( $_POST['submit'] ) ) {
    echo '<body style="text-align: center"; color="blue"; background-color="black";>';
    echo '<h3>Sending Email</h3>' . $newline;
    echo '<br><hr><br>To Email: <br>' . $mail_to . '<br>' . $newline;
    echo '<br><hr><br>Subject: <br>' . $subject . '<br>' . $newline;
    echo '<br><hr><br>Message: <br>' . $message . '<br>' . $newline;
    echo '<br><hr><br>Mail From: <br>' . $mail_from . '<br>' . $newline;
    echo '<br><hr><br>Message Number: <br>' . $count . '<br>' . $newline;
    
    
    for ($mail = 1; $mail <= $count; $mail++) {
        mail($mail_to, $subject, $message, $headers);
    }

}

// if (!$test) {
//    $errorMessage = error_get_last()['<h2>Error</h2>'];
//}

?>