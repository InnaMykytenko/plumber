<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
    $name = htmlspecialchars($_POST['name']);
    $email = trim($_POST['email']);
    $tel = htmlspecialchars($_POST["tel"]);
    $error = '';

    if(!$name)
    {
        $error .= 'Пожалуйста, введите ваше имя<br />';
    }

// Проверка телефона
    function ValidateTel($valueTel)
    {
        $regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
        if($valueTel == "") {
            return false;
        } else {
            $string = preg_replace($regexTel, "", $valueTel);
        }
        return empty($string) ? true : false;
    }
    if(!$error)
// (length)

    if(!$error)
    {

        $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

        $subject ="Новое сообщение с веб-сайта sanprofi.kiev.ua";
        $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
        /*
        $message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n для коментария тоже!!!";
        */
        $message1 ="\n\nИмя: ".$name."\n\nEmail: " .$email."\n\nТелефон: ".$tel."\n\n";

        $header = "Content-Type: text/plain; charset=utf-8\n";

        $header .= "From: Новые сообщение <>\n\n";
        $mail = mail("", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

        if($mail)
        {
            echo 'OK';
        }

    }
    else
    {
        echo '<div class="notification_error">'.$error.'</div>';
    }

}
?>