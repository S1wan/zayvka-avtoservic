<?php

  $zakaz = $_POTS["zakaz"];
  $data = $_POTS["data"];

  $zakaz = htmlspecialchars($zakaz);
  $data = htmlspecialchars($data);

  $zakaz = urldecode($zakaz);
  $data = htmlspecialchars($data);

  $zakaz = trim($zakaz);
  $data = htmlspecialchars($data);

  if (mail("rofl555rofl666@gmail.com",
              "Новое письмо с сайта",
              "Номер: ".$zakaz.
              "Дата: ".$data,
              "From: mpaaa17@gmail.com \r\n")
  ) {
      echo("Письмо отправлено");
  }

  else{
      echo("Есть ошибка");
  }

?>

