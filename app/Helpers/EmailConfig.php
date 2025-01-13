<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static function config($name, $mensaje): PHPMailer
    {
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'mail.redconex.pe';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@redconex.pe';
        $mail->Password = 'redconex2025#';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', ' . $mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@redconex.pe', 'Redconex');
        return $mail;
    }
}
