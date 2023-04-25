<?php
//$user = unserialize($_SESSION['user']);

if (isset($_SESSION['user'])) {
    header('Location: educaciona/resources/views/index.html');
}else{
    header('Location: ./resources/views/singin.php');
}