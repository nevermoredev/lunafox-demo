<?php
    require "../db/db.php";?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style/sign.css">
	</head>
	<body>
		<div class="wrapper">
<?php 
    if($_SESSION['logged_user'] == ''){
echo '
                            <div id="sign_form">
                            <form class="logginin" action="index.php" method="POST">
                            <p class="dada"><input class="input_sign" type="text" placeholder="Ввидите логин" name="login"><br></p>
                            <p><input  class="input_sign_p" type="password" placeholder="Ввидите пароль" name="password"><br></p>
                            <p><input class="button_style_1" type="submit" value="Войти" name="sign_in"></p></form></div>';
    }else{
echo '
                            <script type="text/javascript">document.location.href = "panel/index.php";</script>';
}
 $data = $_POST;
    if ( isset($data['sign_in']) )
{
    $admin = R::findOne('admin', 'login = ?', array($data['login']));
    if (!empty($admin))
    { 
        if ($data['password'] == $admin->password) 
        {
           $_SESSION['logged_user'] = $admin;
           echo '
                            <script type="text/javascript">document.location.href = "panel/index.php";</script>';
        }else
        {
            $errors[] = 'Неверно введен пароль!';
        }
 
    }else
    {
        $errors[] = 'Пользователь с таким логином не найден!';
    }
    if ( ! empty($errors) )
    {
           echo             '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
    }
}
        ?>
        </div>
	</body>
</html>