<?php

namespace Artaxerxes\Educaciona\app\models;

use Artaxerxes\Educaciona\config\Conexao;



class UserDAO
{
    public function getHashedPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
    }

    public static function saveUser(User $user)
    {

        $conn = Conexao::getInstance();
//      $hashedPassword = new HashedPassword();
        $name = mysqli_real_escape_string($conn, $user->getName());
        $email = mysqli_real_escape_string($conn, $user->getEmail());
        $password = mysqli_real_escape_string($conn, $user->getPassword());

//      $hashedPassword = $this->getHashedPassword($password);
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        $result = mysqli_query($conn, $query);
    }

    public static function getUserByEmailAndPassword($email, $password)
    {
        $conn = Conexao::getInstance();
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $row = $result->fetch_assoc();
        $user = new User($row['name'], $row['email'], $row['password']);
        $user->setId($row['id']);
        return $user;
    }

    public static function userIsInscrio($id_user, $id_cuso)
    {
        $conn = Conexao::getInstance();
        $query = "select *from inscritos where curso_id = '$id_cuso 'AND  '$id_user' = '$id_user'";
        $result = mysqli_query($conn, $query);
        $row = $result->fetch_assoc();
        if ($row) {
            return true;
        } else {
            return false;
        }
    }

    public static function inscrever($id_user, $id_curso)
    {
        $conn = Conexao::getInstance();

        try {
            $query = "insert into inscritos(user_id, curso_id) values ('$id_user','$id_curso')";
            $result = mysqli_query($conn, $query);
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 23000) {
                echo "<script>
           alert('Você já esta incrito nesse  cusr');
          </script>";
            }
        }
    }
    public static function getUserName($userId)
    {
        $conn = Conexao::getInstance();
        //$query = "SELECT name FROM users WHERE id = $userId";
        $sql = "select * from users where id = '$userId'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['name'];
        } else {
            return null;
        }
    }
    public static function getTotalUsuarios()
    {
        $conn = Conexao::getInstance();
        $sql = "SELECT COUNT(*) AS total_usuarios FROM users";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();

        return $row['total_usuarios'];
    }

}
