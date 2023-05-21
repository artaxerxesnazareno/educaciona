<?php

namespace Artaxerxes\Educaciona\App\models;

class Aula
{
    private $id;
 private $nome;
 private $link;

 private $descricao;

 private bool $completada;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCompletada()
    {
        return $this->completada;
    }

    /**
     * @param mixed $completada
     */
    public function setCompletada($completada): void
    {
        $this->completada = $completada;
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

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }



}