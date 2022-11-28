<?php
    function get_mail(){
        $to      = 'gaaldren@mail.ru';
        $subject = 'the subject';
        $message = 'Пользователь сменил тему';
        $headers = 'From: ds.vister@mail.ru'       . "\r\n" .
                     'Reply-To: gaaldren@mail.ru' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();
    
        mail($to, $subject, $message, $headers);
    }
?>