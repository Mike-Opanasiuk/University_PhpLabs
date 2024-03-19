<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $want = $_POST["want-free"];
  echo 'Ім\'я:'.$name.'<br>';
  echo 'Email:'.$email.'<br>';
  $msg = $want ? 'Так' : 'Ні';
  echo 'Бажаєте безкоштовні матеріали з підготовки до ЗНО / НМТ ? '.$msg.'<br>';
  $date = date('d.m.Y');
  echo $date.'<br>';
  $time = date('H:i');
  echo $time.'<br>';
?>
