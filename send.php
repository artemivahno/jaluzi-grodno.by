<?php
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$theme = htmlspecialchars($_POST['theme']);
$message = htmlspecialchars($_POST['message']);

if(mail("zakaz@jaluzi-grodno.by", "Заказ с сайта" . $theme, "Имя" . $name . "Phone" . $phone . "Message" . $message, "From:" . $email . " \r\n")) {
	echo "сообщение успешно отправлено";
}
else {
	echo "при отправке сообщения возникли ошибки";
}

header('Location: http://test.jaluzi-grodno.by/contacts.html');