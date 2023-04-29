<?php
//$user = unserialize($_SESSION['user']);

if (isset($_SESSION['user'])) {
    header('Location: educaciona/resources/views/index.php');
}else{
    header('Location: ./resources/views/singin.php');
}