<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6889443330:AAHXIvNq37EoHOiFGJP6k9_9QAC7tnQqJYM";
$chat_id = "-4107632377";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urldecode($value) . "</b>" . "%0A" ;
}

$sendToTelegram = fopen("https://api.telegram.opg/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}%parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

