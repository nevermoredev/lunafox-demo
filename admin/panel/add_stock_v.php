<?php
require "../../db/db.php";
if (isset($_POST['logout'])) {
    
}

if(!empty($_SESSION['logged_user'])){

}else{
    echo '<script type="text/javascript">document.location.href = "../index.php";</script>';
}
    ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../style/add.css">
    <title>Панель</title>
</head>
<body>
    <div class="left_colum">
    <a class="add" href="add_item.php">
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
    
</div>
</body>
</html>