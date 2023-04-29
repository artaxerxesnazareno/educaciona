<?php

namespace Artaxerxes\Educaciona\app\models;

class Curso
{
    private $id;
    private $nome;
    private $descricao;

    private $nivel;

    private $capa;

    private $categoria;


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
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * @param mixed $capa
     */
    public function setCapa($capa): void
    {
        $this->capa = $capa;
    }



    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel): void
    {
        $this->nivel = $nivel;
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

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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