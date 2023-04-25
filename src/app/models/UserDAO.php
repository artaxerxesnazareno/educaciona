<?php

namespace Artaxerxes\Educaciona\app\models;

use Artaxerxes\Educaciona\config\Conexao;
use Artaxerxes\Educaciona\utils\HashedPassword;

require '../../../autoloader.php';
class UserDAO
{
    public function getHashedPassword($password){
        return password_hash($password, PASSWORD_DEFAULT,['cost' => 10]);
    }
  public static function saveUser(User $user){

      $conn = Conexao::getInstance();
//      $hashedPassword = new HashedPassword();
      $name = mysqli_real_escape_string($conn,$user->getName());
      $email = mysqli_real_escape_string($conn,$user->getEmail());
      $password = mysqli_real_escape_string($conn,$user->getPassword());

//      $hashedPassword = $this->getHashedPassword($password);
      $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";

      $result = mysqli_query($conn, $query);
  }

  public static function getUserByEmailAndPassword($email, $password){
        $conn = Conexao::getInstance();
        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        return $user;
  }
}