<?php
    require_once 'mail.php';

    $raw = file_get_contents('php://input');
    $json = json_decode($raw);
    if (!send_mail($json->subject, $json->body)) {
        echo('{"code":0, "message":"���ͳɹ���"}');
    } else {
        echo('{"code":1, "message":"����ʧ�ܡ�"}');
    }
?>