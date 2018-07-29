<?php
// Pear Mail Library
require_once "Mail.php";

const SMTP = 'smtp.163.com';
const PORT = '25';
const USERNAME = 'swssoftwareshare@163.com';
const PASSWORD = ok20050921';


function send_mail($subject, $body) {
    $from = '<username@163.com>';
    $to = '<swssoftwareshare@163.com>';
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
            'host' => SMTP,
            'port' => PORT,
            'auth' => true,
            'username' => USERNAME,
            'password' => PASSWORD
        ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        return true;
    } else {
        return false;
    }
}