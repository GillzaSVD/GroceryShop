<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'shop';
  $link = mysqli_connect($host, $user, $pass, $db_name);

  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
