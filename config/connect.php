<?php
$connect = mysqli_connect('localhost', 'root2', 'root', 'school');
if(!$connect) {
  die('Ошибка подключения к БД');
}