<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sum = $_POST['sum'];
$comment = $_POST['comment'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$sum = htmlspecialchars($sum);
$sum = htmlspecialchars($comment);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$sum = urldecode($sum);
$sum = urldecode($comment);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);
$sum = trim($sum);
$sum = trim($comment);
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $tel;
//echo "<br>";
//echo $sum;
//echo "<br>";
//echo $comment;
//echo "<br>";

if (mail("priz8090@gmail.com", "Заявка с сайта", "ФИО: ".$fio."\n\nE-mail: ".$email."\n\nТелефон: ".$tel."\n\nБюджет: ".$sum."\n\nСообщение: ".$comment ,"From: admin@pagelist.ru \r\n")){     
    echo "сообщение успешно отправлено";
    header("Refresh:5; url=https://pagelist.ru/");
} 
else {
    echo "при отправке сообщения возникли ошибки";
}?>

