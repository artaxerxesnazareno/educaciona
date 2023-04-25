<?php

namespace Artaxerxes\Educaciona\app\models;

class Curso
{
    private $id;
    private $nome;
    private $descricao;


    /**
     * @var Aula[]
     */
    private $aulas = array();


    private $alunos = [];

    /**
     * @param $nome
     * @param $descricao
     */
    public function __construct($nome, $descricao)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
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

    /**
     * @return array
     */
    public function getAulas(): array
    {
        return $this->aulas;
    }

    /**
     * @param array $aulas
     */
    public function setAulas(array $aulas): void
    {
        $this->aulas = $aulas;
    }

    /**
     * @return array
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * @param array $alunos
     */
    public function setAlunos(array $alunos): void
    {
        $this->alunos = $alunos;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function addAula(Aula $aula)
    {
        $this->aulas [] = $aula;
    }

    public function removeAula(Aula $aula)
    {

    }

    public function getFirstAula()
    {
      return  $this->aulas[0];
    }
}