<?php
require_once('../models/UserDAO.php');
require_once('../models/User.php');
use Artaxerxes\Educaciona\models\User;
use Artaxerxes\Educaciona\models\UserDAO;
function singup(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
echo $name;
    $user = new User($name, $email, $password);
    UserDAO::saveUser($user);

    echo "<script>
           alert('Conta criada com sucesso!');
          </script>";

    header('Location: ../../resources/views/');

}
function login(){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = UserDAO::getUserByEmailAndPassword($email, $password);
    if($user){
        session_start();
        $_SESSION['user'] = serialize($user);
        header('Location: ../../resources/views/');
    }else{
        header('Location: ../../resources/views/singin.php?id=erro');
    }
}
if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['singup'])){

    singup();
}if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['singin'])){
    echo "entrou";
    login();
}