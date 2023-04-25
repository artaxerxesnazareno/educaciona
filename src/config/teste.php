<?php

use Artaxerxes\Educaciona\config\Conexao;
use Artaxerxes\Educaciona\models\User;

require_once 'app/models/User.php';
require_once 'app/models/UserDAO.php.php';
$user = new User("Ana", "testuser@example.com", "1234");

User::save($user);

// Verifica se o usuário foi salvo corretamente no banco de dados
$result = mysqli_query($this->conn, "SELECT * FROM users WHERE email = 'testuser@example.com'");

if (!$result) {
    echo "Conexão bem sucedida!";
} else {
    echo "Falha ao conectar com o banco de dados!";
}
