<?php
//$user = unserialize($_SESSION['user']);
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./src/resources/views/index.php');
}else{
    header('Location: ./src/resources/views/singin.php');
}