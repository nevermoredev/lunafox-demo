<?php
require "../../db/db.php";
if (isset($_POST['logout'])) {
    
}

if(!empty($_SESSION['logged_user'])){

}else{
    echo '<script type="text/javascript">document.location.href = "../index.php";</script>';
}
    if(isset($_POST['add'])){
$path = '../../images/item_img/set/';
$tmp_path = 'tmp/';

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
  echo 'Что-то пошло не так';
}
$path = '../../images/item_img/nogti/';
$tmp_path = 'tmp/';

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['nogti']['tmp_name'], $path . $_FILES['nogti']['name']))
  echo 'Что-то пошло не так';
}



 $item = R::dispense('items'); //передаем название таблицы users
 
//поле id можно не создавать, так как RedBeanPHP автоматически его создает с автоинкрементом
$item->name = $_POST['item_name'];
$item->about = $_POST['text_about'];
$item->img = $_FILES['picture']['name'] ;
$item->nogti = $_FILES['nogti']['name'] ;
$item->type = $_POST['type'];

R::store($item); // сохраняем объект $user в таблице 
    }

?>
</html>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../style/add.css">
    <title>Панель</title>
</head>
<body>
    <div class="left_colum">
    <a class="selected" href="add_item.php">
        Добавить товар
    </a><br>
    <a class="add" href="add_stock_v.php">
        Добавить акцию с видео
    </a><br>
    <a class="add" href="add_stock_i.php">
        Добавить акцию и изображение
    </a><br>
    <a class="add" href="add_apr.php">
        Добавить апаратуру
    </a>
    <form class="logout_form" method="POST" action="../logout.php">
    <input class="logout" type="submit" name="logout" value="Выйти" title="Выйти">
</form>
</div>
<div class="right_colum">
    <div class="right_colum_wrapper">
        <form class="add_form" method="POST" action="add_item.php" enctype="multipart/form-data">
            <p class="text_org">Добавить изображение</p>
           <input class="add_input" type="file" name="picture" ><br>
           <p class="text_org"> Добавить окрас</p>
           <input class="add_input" type="file" name="nogti" ><br>
            <input class="add_input" type="text" name="item_name" placeholder="Название"><br>
            <textarea class="add_about" name="text_about" placeholder="Ввидите описание"></textarea><br>
            <p class="text_org">Добавить тип</p>
              <select name="type" title="Тип">
         <option value="" hidden disabled selected>Выбери тип</option>
        <option>Pigment</option>
        <option>Masha Create Pigment</option>
        <option>Thermo Effect</option>
        <option>Waterway</option>
        <option>Gradient</option>
        <option>French</option>
        <option>Brilliance</option>
        <option>Кошачый глаз</option>
        <option>Effect Platinum</option>
    </select>
            <br>
            <input class="add_item" type="submit" name="add" value="Загрузить товар">
        </form>
    </div>

</div>
</body>
</html>
<?php

?>