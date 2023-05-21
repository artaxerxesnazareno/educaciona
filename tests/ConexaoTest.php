<?php


namespace tests;

use Artaxerxes\Educaciona\config\Conexao;
use PHPUnit\Framework\TestCase;




class ConexaoTest extends TestCase
{
    public function testGetInstance()
    {
        $conexao = Conexao::getInstance();
        $this->assertInstanceOf(\mysqli::class, $conexao);
    }
}

