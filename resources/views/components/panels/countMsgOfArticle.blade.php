@props(['msg'])
<?php

$word = null;
//Обрезаем до 2 цифр
$num = $msg % 100;
//Если от 11 до 14
if ($num > 10 && $num < 15) {
    $word = "сообщений";
} else {
    $num = $num % 10;

    if ($num == 0) {
        $word = "сообщений";
    }
    if ($num == 1) {
        $word = "сообщение";
    }
    if ($num > 1) {
        $word = "сообщения";
    }
    if ($num > 4) {
        $word = "сообщений";
    }
}

echo $msg . " " . $word;
