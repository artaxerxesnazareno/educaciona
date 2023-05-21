<?php
require '../../../autoloader.php';

use Artaxerxes\Educaciona\app\models\User;
use Artaxerxes\Educaciona\app\models\UserDAO;

session_start();


function singup()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User($name, $email, $password);
    UserDAO::saveUser($user);

    echo "<script>
           alert('Conta criada com sucesso!');
          </script>";

    header('Location:  ../../resources/views/');

}


function login()
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = UserDAO::getUserByEmailAndPassword($email, $password);
    if ($user) {
        session_start();
        $_SESSION['user'] = serialize($user);
        $_SESSION['user_id'] = $user->getId();
        header('Location: ../../resources/views/');
    } else {
        header('Location: ../../resources/views/singin.php?id=erro');
    }
}

function inscrever()
{
    UserDAO::inscrever($_SESSION['user_id'], $_GET['id']);
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['singup'])) {
    singup();
}
if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['singin'])) {
    login();
}


if (isset($_GET['id'])) {

    inscrever();
    header('Location: ../../resources/views/details.php?id='.$_GET['id'].'');
}
