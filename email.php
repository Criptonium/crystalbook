<?php
$email = $_POST['email_email']; //присвоение переменных POST значений
$phone = $_POST['phone_email']; //присвоение переменных POST значений
$message = $_POST['message_email']; //присвоение переменных POST значений

if(isset($_POST['mailing']))
{
  if (mail("ryabokon.maksim.romanovich@gmail.com", "Вопрос", $message ,$email)) { //Отправка сообщения
    header('Location: http://localhost');
  }
  else {
    echo "возникла ошибка";
  }
}
