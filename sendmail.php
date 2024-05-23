&lt;?php
require 'PHPMailerAutoload.php';
 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$mail = new PHPMailer;
$mail-&gt;isSMTP();
$mail-&gt;Host = 'smtp.yandex.ru';
$mail-&gt;SMTPAuth = true;
$mail-&gt;Username = 'dimitriy.bogatiy@yandex.ru';
$mail-&gt;Password = '199906i2dB';
$mail-&gt;SMTPSecure = 'SSL';
$mail-&gt;Port = 587;
 
$mail-&gt;setFrom($email, $name);
$mail-&gt;addAddress('dimitriy.bogatiy@yandex.ru');
$mail-&gt;isHTML(true);
 
$mail-&gt;Subject = 'Сообщение с формы обратной связи';
$mail-&gt;Body    = "От: $name &lt;br&gt; Email: $email &lt;br&gt; Сообщение: $message";
 
if(!$mail-&gt;send()) {
    echo 'Ошибка при отправке сообщения.';
    echo 'Mailer Error: ' . $mail-&gt;ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено!';
}
?&gt;
