<?php

namespace Artaxerxes\Educaciona\models;

use PHPUnit\Framework\TestCase;

class UserDAOTest extends TestCase
{

    public function testSaveUser()
    {
        $user = new User("Ana", "testuser@example.com", "1234");

        User::save($user);

        // Verifica se o usuário foi salvo corretamente no banco de dados
        $result = mysqli_query($this->conn, "SELECT * FROM users WHERE email = 'testuser@example.com'");
        $this->assertNotNull(mysqli_fetch_assoc($result));
    }
}
