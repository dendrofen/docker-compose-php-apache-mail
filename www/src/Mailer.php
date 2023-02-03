<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    static function create(): PHPMailer
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = false;
        $mail->SMTPSecure = '';
        $mail->SMTPAutoTLS = false;
        $mail->Host = 'mail';
        $mail->Port = '1025';

        return $mail;
    }
}
