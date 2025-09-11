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
echo $fio;
echo "<br>";
echo $email;
echo "<br>";
echo $tel;
echo "<br>";
echo $sum;
echo "<br>";
echo $comment;
echo "<br>";

if (mail("priz8090@gmail.com", "Заявка с сайта", "ФИО: ".$fio."\n\nE-mail: ".$email."\n\nТелефон: ".$tel."\n\nБюджет: ".$sum."\n\nСообщение: ".$comment ,"From: admin@pagelist.ru \r\n")){     
    echo "сообщение успешно отправлено";
    header("Refresh:5; url=http://127.0.0.1:5500/");
} 
else {
    echo "при отправке сообщения возникли ошибки";
}


require_once '/PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'priz8090@gmail.com';
$mail->Password = 'L5opc75555';
 
// От кого
$mail->setFrom('mail@ws.ru', 'ws.ru');        
 
// Кому
$mail->addAddress('priz8090@gmail.com', 'Иван Петров');
 
// Тема письма
$mail->Subject = $subject;
 
// Тело письма
$body = '<p><strong>«Hello, world!» </strong></p>';
$mail->msgHTML($body);
 
// Приложение
$mail->addAttachment(__DIR__ . '/image.jpg');
 
$mail->send();
?>

