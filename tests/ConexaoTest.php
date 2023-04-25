<?php


namespace tests;

use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../config/Conexao.php';

class ConexaoTest extends TestCase
{
    public function testGetInstance()
    {
        $conexao = \Artaxerxes\Educaciona\config\Conexao::getInstance();
        $this->assertInstanceOf(mysqli::class, $conexao);
    }
}

