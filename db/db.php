<?php
require 'libs/rb.php';

R::setup( 'mysql:host=localhost;dbname=lunafox',
    'root', '' ); //Подключение к базе
session_start();
 ?>