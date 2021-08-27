<?php

$recepient = "film.viktor@yandex.ru"; //Почта куда будут приходить письма
$subject = "Заявка с сайта Форма обратной связи ajax"; //Сообщение
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
// $headers .= "From: test.ru <test.ru>\r\n"; 
$headers .= "From: veelfeel.github.io <veelfeel.github.io>\r\n"; 

$name = trim($_POST["name"]);
$phone = trim($_POST["tel"]);
$massage = trim($_POST["massage"]); //Поля

$message = "Имя: $name <br/> Телефон: $phone <br/> Сообщение: $massage";

mail($recepient, $subject, $message, $headers);