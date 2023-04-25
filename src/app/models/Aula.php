<?php

namespace Artaxerxes\Educaciona\App\models;

class Aula
{
 private $nome;
 private $link;

    /**
     * @param $nome
     * @param $link
     */
    public function __construct($nome, $link)
    {
        $this->nome = $nome;
        $this->link = $link;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }


}