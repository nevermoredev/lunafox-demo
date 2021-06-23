<?php
require "../db/db.php";
$user = R::dispense('admin'); //передаем название таблицы users
 
//поле id можно не создавать, так как RedBeanPHP автоматически его создает с автоинкрементом
$user->login = 'dimabelarus';
$user->password = 'dima334477';
 
R::store($user); // сохраняем объект $user в таблице 

?>