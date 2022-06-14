<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'school');
if(!$connect) {
  die('Ошибка подключения к БД');
}